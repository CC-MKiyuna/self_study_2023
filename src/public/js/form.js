
// 発行書送付先メールアドレス表示
(function() {
    if ($('input[name="mailAddress"]:checked').val() == "1") {
       $('.mailAddress').hide();
    }
    if ($('input[name="mailAddress"]:checked').val() == "2") {
        $('#js-show').show();
    }
    $('[name="mailAddress"]:radio').change(function() {
        if ($('[id=select_radio1]').prop('checked')) {
            $('.mailAddress').hide();
        } else if ($('[id=select_radio2]').prop('checked')) {
           $('.mailAddress').hide();
           $('#js-show').show();
        } 
    });
});

// 生年月日を表示
let userBirthdayYear = document.querySelector('.purchase_year');
let userBirthdayMonth = document.querySelector('.purchase_month');
let userBirthdayDay = document.querySelector('.purchase_day');

function createOptionForElements(elem, val) {
  let option = document.createElement('option');
  option.text = val;
  option.value = val;
  if (elem.getAttribute('old') == val) {
    option.selected = "selected";
  }
  elem.appendChild(option);
}

//月の生成
for(let i = 1; i <= 12; i++) {
  createOptionForElements(userBirthdayMonth, i);
}
//日の生成
for(let i = 1; i <= 31; i++) {
  createOptionForElements(userBirthdayDay, i);
}

/**
 * 日付を変更する関数
 */
function changeTheDay() {
  userBirthdayDay.innerHTML = '';
  let lastDayOfTheMonth = new Date(userBirthdayYear.value, userBirthdayMonth.value, 0).getDate();
  for(let i = 1; i <= lastDayOfTheMonth; i++) {
    createOptionForElements(userBirthdayDay, i);
  }
}

userBirthdayYear.addEventListener('change', function() {
  changeTheDay();
});

userBirthdayMonth.addEventListener('change', function() {
  changeTheDay();
});
