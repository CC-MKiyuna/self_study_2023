
 const canvas = document.createElement('canvas')
 const reader = new FileReader()
 var code

 inputQRCode.addEventListener('change', e => {
   try {
    const file = e.target.files[0]
    reader.onload = function() {
    const image = new Image()
    image.onload = function() {
    canvas.width = this.width
    canvas.height = this.height
    const ctx = canvas.getContext('2d')
    ctx.drawImage(image, 0, 0)
    const imageData = ctx.getImageData(0, 0, this.width, this.height)
    code = jsQR(imageData.data, imageData.width, imageData.height)
    console.log('QRコード読み込み完了')
    if (!code) {
        inputQRCode.value = ''
        error.textContent = 'QR コードを選択してください。'
        return
        }
    }
    const src = reader.result
    if (!src) {
        inputQRCode.value = ''
        error.textContent = '画像の読み込みに失敗しました。'
        return
    }
    image.src = src
    }
     reader.readAsDataURL(file) //調べなおす
     error.innerHTML = ''
   } catch (e) {
     inputQRCode.value = ''
     error.textContent = 'イベント失敗'
   }
 })

 img_upload.addEventListener('click', butotnClick);
 function butotnClick(){
  var strings = code.data.split(' ')
  console.log('取得した文字列' + code.data)
  console.log('分割した文字列' + strings)
  product.textContent = strings[0]
  product_number.textContent = strings[1]
  serial_number.textContent = strings[2]

}


// FB
//  どこで何をしているか、処理が起きる順番追えていないだろう
// インテンドがそろっていないからそう思う
