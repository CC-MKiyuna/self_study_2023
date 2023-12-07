$(function() {
    $('#file-sample').on('change', function(e) {
        // 1枚だけ表示する
        var file = e.target.files[0];

        // ファイルリーダー作成
        var fileReader = new FileReader();
        fileReader.onload = function() {
            // Data URIを取得
            var dataUri = this.result;

            // img要素に表示
            $('#file-preview').attr('src', dataUri);
        }

        // ファイルをData URIとして読み込む
        fileReader.readAsDataURL(file);
    });
});