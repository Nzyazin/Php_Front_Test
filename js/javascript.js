/* Функции для вывода блока по ИД*/
function action1() {
    var added_item_button = document.getElementById('content1');
    var actualDisplay = getComputedStyle(added_item_button).display;
    if (actualDisplay == 'none') {
      added_item_button.style.display = 'block';
    } else {
      added_item_button.style.display = 'none';
    }
  }

function action2() {
    var added_item_button = document.getElementById('content2');
    var actualDisplay = getComputedStyle(added_item_button).display;
    if (actualDisplay == 'none') {
      added_item_button.style.display = 'block';
    } else {
      added_item_button.style.display = 'none';
    }
  }

function action3() {
    var added_item_button = document.getElementById('content3');
    var actualDisplay = getComputedStyle(added_item_button).display;
    if (actualDisplay == 'none') {
      added_item_button.style.display = 'block';
    } else {
      added_item_button.style.display = 'none';
    }
  }

function action4() {
    var added_item_button = document.getElementById('content4');
    var actualDisplay = getComputedStyle(added_item_button).display;
    if (actualDisplay == 'none') {
      added_item_button.style.display = 'block';
    } else {
      added_item_button.style.display = 'none';
    }
  }

function action5() {
    var added_item_button = document.getElementById('content5');
    var actualDisplay = getComputedStyle(added_item_button).display;
    if (actualDisplay == 'none') {
      added_item_button.style.display = 'block';
    } else {
      added_item_button.style.display = 'none';
    }
  }

function action6() {
    var added_item_button = document.getElementById('content6');
    var actualDisplay = getComputedStyle(added_item_button).display;
    if (actualDisplay == 'none') {
      added_item_button.style.display = 'block';
    } else {
      added_item_button.style.display = 'none';
    }
  }
/* Скрипт модального окна */
  $( document ).ready(function() {
    $('.trigger').on('click', function() {
        $('.modal-wrapper').toggleClass('open');
        $('.page-wrapper').toggleClass('blur-it');
        return false;
    });
    $('.head').on('click', function (){
        $('.modal-wrapper').removeClass('open');
    })
  });


