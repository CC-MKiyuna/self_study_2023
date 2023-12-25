<?php

namespace App\Http\Livewire;

use Livewire\Component;


class Game extends Component
{
    //  出題項目
    public $words = [
        'dog',
        'cat',
        'horse',
    ];
    // 現在表示中の項目
    public $currentWord;
    // 回答済みの項目を格納する配列。初期化しておく
    public $solvedWords = [];
    public $typingText = '';
    public $status = 'wating';
    public function start()
    {
        $this->status = 'trying';
        $this->generateCurrentWord();
    }
//*****---------------
// 問題を生成する関数
//******--------------
    public function generateCurrentWord()
    {
        // array_filter(対象配列, コールバックする関数) :$words配列の用を引数にして関数の結果を返す
        $unsolvedWords = array_filter($this->words, function ($word) { 

            // wordsのうち未回答の要素を返す
            // in_array(探す値,探される対象の配列) => 回答済み配列solvedWordsに引数のwordが入っていれば値を返す
            return !in_array($word, $this->solvedWords);
        });

        // array_values():引数の配列の全ての値を返す　=> 配列を入れなおすことで要素番号を整理している
        $unsolvedWords = array_values($unsolvedWords);

        // unsolvedWordsの要素数のうち乱数を取得
        $randomIndex = rand(0, count($unsolvedWords) - 1);

        // 未回答の問題のうち乱数で決められた要素番号を持つ要素を問題（currentWord）にする
        $this->currentWord = $unsolvedWords[$randomIndex];
    }

    // render():各アクションの最後に自動的に呼ばれ、Viewを描画
    public function render()
    {
        if ($this->typingText === $this->currentWord) {
            // array_push(追加される配列, 追加する要素)：一つ以上の要素を配列の最後に追加する関数
            array_push($this->solvedWords, $this->currentWord);
            if (count($this->words) === count($this->solvedWords)) {
                // 全ての問題が解答済みならステータスを終了ステータスにする
                $this->status = 'done';
            } else {
                // 未回答の問題があるなら問題を生成する
                $this->generateCurrentWord();
            }
            $this->typingText = '';
        }
        return view('livewire.game');
    }

    public function getQuestionNumberProperty() 
    {
        if (count($this->words) === count($this->solvedWords)) {
            return count($this->solvedWords);
        } else {
            return count($this->solvedWords) + 1;
        }
    }
}

