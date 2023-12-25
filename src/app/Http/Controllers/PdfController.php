<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use setasign\Fpdi\TcpdfFpdi;
use TCPDF_FONTS;

class PdfController extends Controller
{
    //Webカメラによるqrcode読み取り画面表示
    public function entry()
    {   
        return view('pdf.entry');
    }
    //画像アップロードによるqrcode読み取り画面表示
    public function post(Request $request)
    {   
        $last_name=$request->last_name;
        $first_name=$request->first_name;

        $request->session()->put('last',$last_name);
        $request->session()->put('first',$first_name);
        return view('pdf.thanks');
    }
    public function downloadPdf(Request $request)
    {   
        // FPDIインスタンス生成
        $pdf = new TcpdfFpdi("L","px","B5",true,"UTF-8");

        // フォントの設定
        $pdf->SetFont('kozminproregular');
        // テンプレートとなるPDFファイルを指定（ファイルまでのパスを引数に渡す）
        $pdf->setSourceFile('pdf/system_warranty.pdf');
        // ヘッダー、フッダーなし
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        // 新規ページをセット
        $pdf->addPage('L');
        // テンプレートPDFの1ページ目を読み込み
        $page = $pdf->importPage(1); 
        // 読み込んだページをテンプレートに使用
        $pdf->useTemplate($page); 
        // 各種初期設定
        $pdf->setFontSize(12);
        $pdf->setMargins(0, 0, 0);
        $pdf->setCellPadding(0);
        $pdf->setAutoPageBreak(true, 0);
        $last="キユナ";
        $first="ミユジ";
        // 文字列を置きたい座標をセット
        $pdf->SetXY(56, 132);
        // セルの作成（セルの横幅,セルの縦幅,文字列,枠線の設定,?(コールの向き？）,

        $pdf->Cell(105, 23, "つかのめ", '1', '2', 'C', false, '', '');
        $pdf->SetXY(56, 132+23);
        $pdf->Cell(105, 23, $last, '1', '', 'C', false, '', '');
        $pdf->SetXY(56, 132+23*2);
        $pdf->Cell(105, 23, $first, '1', '', 'C', false, '', '');
        $pdf->SetXY(56+105, 132);
        $pdf->Cell(102, 23, "なかで", '1', '', 'C', false, '', '');
        $pdf->SetXY(56+105*2, 132+23*3);
        $pdf->Cell(105, 23, "つかのめ", '1', '', 'C', false, '', '');
        $pdf->SetXY(430, 60);
        $pdf->Cell(105, 23, "kataban", '1', '', 'C', false, '', '');
    // PDF出力
    // ・第1引数:ファイル名（指定しなければ doc.pdf という名前になる）
    // ・第2引数:出力モード（I：ブラウザへ出力, D ：ファイルダウンロード, F：ローカルファイルとして保存, S ：文字列としてドキュメントを返す
        $pdf->Output(); 
    }
    

}



