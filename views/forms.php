<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <title>Document</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
    <!-- Боковая панель -->
        <div class="menu">
            <nav class="dws-menu">  
                <div class="board">
                    <a href="form.php?id=<?=$form[0]['id'];?>"><?=$form[0]['title']?><div class="triangle-right"></div></a>
                </div>
                <div class="orders">
                    <a href="form.php?id=<?=$form[1]['id'];?>"><?=$form[1]['title']?><div class="triangle-right"></div></a>
                </div>
                <div class="progs">
                    <a href="form.php?id=<?=$form[2]['id'];?>"><?=$form[2]['title']?><div class="triangle-right"></div></a>
                </div>
                <div class="center">
                    <a href="form.php?id=<?=$form[3]['id'];?>"><?=$form[3]['title']?><div class="triangle-right"></div></a>
                </div>
                <div class="token">
                    <a href="form.php?id=<?=$form[4]['id'];?>"><?=$form[4]['title']?><div class="triangle-right"></div></a>
                </div>
                <div class="serv">
                    <a href="form.php?id=<?=$form[5]['id'];?>"><?=$form[5]['title']?><div class="triangle-right"></div></a>
                </div>                
            </nav>
        </div>
        
        <div class="content">
            <h1 class="title"><?=$form[2]['title'] ?>
            </h1>
            <div class="search-box">
                <a class="search-btn" href="#">
                    <img src="../img/search.png" />
                </a>
                <input class="search-txt" type="text" id="" placeholder="Введите название">
            </div>
            <div class="line">
            </div>
            <table class="table" id="first-table">
                <thead class="thead">
                    <tr>
                        <th style="width: 13%;">Номер заказа</th>
                        <th style="width: 27%;">Программа</th>
                        <th style="width: 17%;">Действует до</th>
                        <th style="width: 10%;">Скачать</th>
                        <th style="width: 10%;">Руководство</th>
                        <th style="width: 23%;">Статус</th>
                    </tr>
                </thead>
            </table>
            <table class="table" onclick=action1()>
                <tbody class="section-step">
                    <tr>
                        <td style="width: 13%;" class="num-order"><p>112192</p></td>
                        <td style="width: 27%;" class="program"><p>(2) Детский сад: Питание</p></td>
                        <td style="width: 17%;" class="didline"><p style="color: #FC5426">08.09.2022</p></td>                        
                        <td style="width: 10%;"><img src="../img/vect.png" /></td>
                        <td style="width: 10%;"><img src="../img/file.png" /></td>
                        <td style="width: 23%;" class="info"><p style="color: #27AE60">Активировано (1)</p><p style="color: #C4C4C4">Неактивировано (1)</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="all-section" id="content1">
                <div class="section-info">
                    <h1 class="activation">Доступно к активации: 1</h1>
                    <p class="query_code">Запросите код и активируйте программу</p>
                    <div class="page-wrapper">
                        <div class="baton trigger">
                            <button class="btn">Запросить код</button>
                        </div>
                    </div>
                </div>
                <table class="section-info2">
                    <tbody class="section-step">
                        <tr>
                            <td>
                                <div class="text">
                                    <p><span style="color: #A5A5A5">Дата активации:</span> 13:54:59</p>
                                    <p><span style="color: #A5A5A5">Наименование компьютера:</span> HOME-PC<span class="tooltip" data-title="Роман Pentium (R) Dual-Core CPU T440 @ 2.20 GHz Майкрософт Windows 8.1 Профессиональная"><img class="exclam" src="../img/exclam.png"></span></p>
                                    <p><span style="color: #A5A5A5">Комментарий:</span> Хочу перенести программу</p>
                                </div>
                            </td>                                                            
                            <td>
                                <div class="icon-btn-2">
                                    <button class="btn-2">Деактивировать</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>                                    
            </div>         
            <table class="table" onclick=action2()>                
                <tbody class="section-step">
                    <tr>
                        <td style="width: 13%;" class="num-order"><p>112192</p></td>
                        <td style="width: 27%;" class="program"><p>(2) Детский сад: Питание</p></td>
                        <td style="width: 17%;" class="didline"><p style="color: #3E3E3E80">08.09.2022</p></td>                        
                        <td style="width: 10%;"><img src="../img/vect.png" /></td>
                        <td style="width: 10%;"><img src="../img/file.png" /></td>
                        <td style="width: 23%;" class="info"><p style="color: #27AE60">Активировано (1)</p><p style="color: #C4C4C4">Неактивировано (1)</p>
                        </td>
                    </tr>
                </tbody>
            </table>                         
            <div class="all-section" id="content2">
                <div class="section-info">
                    <h1 class="activation">Доступно к активации: 1</h1>
                    <p class="query_code">Запросите код и активируйте программу</p>
                    <div class="page-wrapper">
                        <div class="baton trigger">
                            <button class="btn">Запросить код</button>
                        </div>
                    </div>
                </div>
                <table class="section-info2">
                    <tbody class="section-step">                       
                        <tr>
                            <td>
                                <div class="text">
                                    <p><span style="color: #A5A5A5">Дата активации:</span> 13:54:59</p>
                                    <p><span style="color: #A5A5A5">Наименование компьютера:</span> HOME-PC<span class="tooltip" data-title="Роман Pentium (R) Dual-Core CPU T440 @ 2.20 GHz Майкрософт Windows 8.1 Профессиональная"><img class="exclam" src="../img/exclam.png"></span></p>
                                    <p><span style="color: #A5A5A5">Комментарий:</span> Хочу перенести программу</p>
                                </div>                                
                            </td>
                            <td><div class="icon-btn-2">
                                    <button class="btn-2">Деактивировать</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>                                    
            </div>                
                      
            <table class="table" onclick=action3()>
                <tbody class="section-step">
                    <tr>
                        <td style="width: 13%;" class="num-order"><p>112192</p></td>
                        <td style="width: 27%;" class="program"><p>(2) Детский сад: Питание</p></td>
                        <td style="width: 17%;" class="didline"><p style="color: #3E3E3E80">08.09.2022</p></td>                        
                        <td style="width: 10%;"><img src="../img/vect.png" /></td>
                        <td style="width: 10%;"><img src="../img/file.png" /></td>
                        <td style="width: 23%;" class="info"><p style="color: #27AE60">Активировано (2)</p><p style="color: #C4C4C4">Неактивировано (2)</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="all-section" id="content3">
                <div class="section-info">
                    <h1 class="activation">Доступно к активации: 2</h1>
                    <p class="query_code">Запросите код и активируйте программу</p>
                    <div class="page-wrapper">
                        <div class="baton trigger">
                            <button class="btn">Запросить код</button>
                        </div>
                    </div>
                </div>
                <table class="section-info2">
                    <tbody class="section-step">
                        <tr>
                            <td>
                                <div class="text">
                                    <p><span style="color: #A5A5A5">Дата активации:</span> 13:54:59</p>
                                    <p><span style="color: #A5A5A5">Наименование компьютера:</span> HOME-PC<span class="tooltip" data-title="Роман Pentium (R) Dual-Core CPU T440 @ 2.20 GHz Майкрософт Windows 8.1 Профессиональная"><img class="exclam" src="../img/exclam.png"></span></p>
                                    <p><span style="color: #A5A5A5">Комментарий:</span> Хочу перенести программу</p></td>
                                </div>                            
                            <td><div class="icon-btn-2">
                                <button class="btn-2">Деактивировать</button>
                            </div></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="text">
                                    <p><span style="color: #A5A5A5">Дата активации:</span> 13:54:59</p>
                                    <p><span style="color: #A5A5A5">Наименование компьютера:</span> HOME-PC<span class="tooltip" data-title="Роман Pentium (R) Dual-Core CPU T440 @ 2.20 GHz Майкрософт Windows 8.1 Профессиональная"><img class="exclam" src="../img/exclam.png"></span></p>
                                    <p><span style="color: #A5A5A5">Комментарий:</span> Хочу перенести программу</p></td>
                                </div>                            
                            <td><div class="icon-btn-2">
                                <button class="btn-2">Деактивировать</button>
                            </div></td>
                        </tr>
                    </tbody>
                </table>                                    
            </div>      
            <table class="table" onclick=action4()>
                <tbody class="section-step">
                    <tr>
                        <td style="width: 13%;" class="num-order"><p>112192</p></td>
                        <td style="width: 27%;" class="program"><p>(2) Детский сад: Питание</p></td>
                        <td style="width: 17%;" class="didline"><p style="color: #3E3E3E80">08.09.2022</p></td>                        
                        <td style="width: 10%;"><img src="../img/vect.png" /></td>
                        <td style="width: 10%;"><img src="../img/file.png" /></td>
                        <td style="width: 23%;" class="info"><p style="color: #C4C4C4">Неактивировано (1)</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="all-section" id="content4">
                <div class="section-info">
                    <h1 class="activation">Доступно к активации: 1</h1>
                    <p class="query_code">Запросите код и активируйте программу</p>
                    <div class="page-wrapper">
                        <div class="baton trigger">
                            <button class="btn">Запросить код</button>
                        </div>
                    </div>
                </div>                                                 
            </div>      
            <table class="table" onclick=action5()>
                <tbody class="section-step">
                    <tr>
                        <td style="width: 13%;" class="num-order"><p>112192</p></td>
                        <td style="width: 27%;" class="program"><p>(2) Детский сад: Питание</p></td>
                        <td style="width: 17%;" class="didline"><p style="color: #FC5426">08.09.2022</p></td>                        
                        <td style="width: 10%;"><img src="../img/vect.png" /></td>
                        <td style="width: 10%;"><img src="../img/file.png" /></td>
                        <td style="width: 23%;" class="info"><p style="color: #27AE60">Активировано (1)</p><p style="color: #C4C4C4">Неактивировано (1)</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="all-section" id="content5">
                <div class="section-info">
                    <h1 class="activation">Доступно к активации: 1</h1>
                    <p class="query_code">Запросите код и активируйте программу</p>
                    <div class="page-wrapper">
                        <div class="baton trigger">
                            <button class="btn">Запросить код</button>
                        </div>
                    </div>
                </div>
                <table class="section-info2">
                    <tbody class="section-step">
                        <tr>
                            <td>
                                <div class="text">
                                    <p><span style="color: #A5A5A5">Дата активации:</span> 13:54:59</p>
                                    <p><span style="color: #A5A5A5">Наименование компьютера:</span> HOME-PC<span class="tooltip" data-title="Роман Pentium (R) Dual-Core CPU T440 @ 2.20 GHz Майкрософт Windows 8.1 Профессиональная"><img class="exclam" src="../img/exclam.png"></span></p>
                                    <p><span style="color: #A5A5A5">Комментарий:</span> Хочу перенести программу</p>
                                </div>
                            </td>                                                            
                            <td>
                                <div class="icon-btn-2">
                                    <button class="btn-2">Деактивировать</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>                                    
            </div>        
            <table class="table" onclick=action6()>
                <tbody class="section-step">
                    <tr>
                        <td style="width: 13%;" class="num-order"><p>112192</p></td>
                        <td style="width: 27%;" class="program"><p>(2) Детский сад: Питание</p></td>
                        <td style="width: 17%;" class="didline"><p style="color: #3E3E3E80">08.09.2022</p></td>                        
                        <td style="width: 10%;"><img src="../img/vect.png" /></td>
                        <td style="width: 10%;"><img src="../img/file.png" /></td>
                        <td style="width: 23%;" class="info"><p style="color: #27AE60">Активировано (1)</p><p style="color: #C4C4C4">Неактивировано (1)</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="all-section" id="content6">
                <div class="section-info">
                    <h1 class="activation">Доступно к активации: 1</h1>
                    <p class="query_code">Запросите код и активируйте программу</p>
                    <div class="page-wrapper">
                        <div class="baton trigger">
                            <button class="btn">Запросить код</button>
                        </div>
                    </div>
                    
                </div>
                <table class="section-info2">
                    <tbody class="section-step">
                        <tr>
                            <td>
                                <div class="text">
                                    <p><span style="color: #A5A5A5">Дата активации:</span> 13:54:59</p>
                                    <p><span style="color: #A5A5A5">Наименование компьютера:</span> HOME-PC<span class="tooltip" data-title="Роман Pentium (R) Dual-Core CPU T440 @ 2.20 GHz Майкрософт Windows 8.1 Профессиональная"><img class="exclam" src="../img/exclam.png"></span></p>
                                    <p><span style="color: #A5A5A5">Комментарий:</span> Хочу перенести программу</p>
                                </div>
                            </td>                                                            
                            <td>
                                <div class="icon-btn-2">
                                    <button class="btn-2">Деактивировать</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>                                    
            </div>                    
        </div>        
    </div> 
    <script src="../js/javascript.js"></script>
    <div class="modal-wrapper">
        <div class="head"></div>
        <div class="modal">
            <div class="content1">
                <div class="good-job">
                    <form action="" class="form_modal_window" id="callbacks" method="post">
                        <h1 class="mod_head">Запрос кода активации</h1>
                        <p class="mod_text">Введите исходный код, который выдает программа</p>
                        <div class="bloc_in">
                            <input class="inputting" id="o" placeholder="0" maxlength="1" >
                            <input class="inputting" id="t" placeholder="0" maxlength="1" >
                            <input class="inputting" id="thr" placeholder="0" maxlength="1" >
                            <input class="inputting" id="f" placeholder="0" maxlength="1" >
                            <input class="inputting" id="fi" placeholder="0" maxlength="1" >
                            <input class="inputting" id="s" placeholder="0" maxlength="1" >
                            <input class="inputting" id="se" placeholder="0" maxlength="1" >
                            <input class="inputting" id="e" placeholder="0" maxlength="1" >
                            <input class="inputting" id="n" placeholder="0" maxlength="1" >
                            <input class="inputting" id="t" placeholder="0" maxlength="1" >
                            <input class="inputting" id="el" placeholder="0" maxlength="1" >
                            <input class="inputting" id="tw" placeholder="0" maxlength="1" >
                            <input class="inputting" id="th" placeholder="0" maxlength="1" >
                            <input class="inputting" id="fo" placeholder="0" maxlength="1" >
                            <input class="inputting" id="fif" placeholder="0" maxlength="1" >
                        </div>                      
                        <textarea style="width: 512px; height: 118px; border: 1px solid #C4C4C4; border-radius: 10px;"type="text" id="comment" placeholder="Комментарий..."></textarea>
                        <input type="submit" value="Запросить код" id="btncontcall">
                    </form>
                    <div id="erconts"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            /*ПРОВЕРЯЕМ НАЖАТА ЛИ КНОПКА ОТПРАВКИ*/
            $('#btncontcall').click(function(){
                // собираем данные с формы
                var o    = $('#o').val();
                var t   = $('#t').val();
                var thr = $('#thr').val();
                var f = $('#f').val();
                var fi = $('#fi').val();
                var s = $('#s').val();
                var se = $('#se').val();
                var e = $('#e').val();
                var n = $('#n').val();
                var t = $('#t').val();
                var el = $('#el').val();
                var tw = $('#tw').val();
                var th = $('#th').val();
                var fo = $('#fo').val();
                var fif = $('#fif').val();
                var comment = $('#comment').val();
                // отправляем данные
                $.ajax({
                    url: "views/send.php", // куда отправляем
                    type: "post", // метод передачи
                    data:
                    { // что отправляем
                        "o": o,
                        "t": t,
                        "thr": thr,
                        "f": f,
                        "fi": fi,
                        "s": s,
                        "se": se,
                        "e": e,
                        "n": n,
                        "t": t,
                        "el": el,
                        "tw": tw,
                        "th": th,
                        "fo": fo,
                        "fif": fif,
                        "comment": comment,
                    },
                    error:function(){
                        $("#erconts").html("Произошла ошибка!");
                        alert("Bad");
                    }, 
                    /* если произойдет ошибка в элементе с id erconts выведится сообщение*/                 
                    beforeSend: function() {                     
                        $("#erconts").html("Отправляем данные...");              
                    },                 
                    success: function(result){                     
                        /* В случае удачной обработки и отправки выполнится следующий код*/                     
                        $('#erconts').html(result);                     
                        console.log("test"); 
                        alert("Good");                
                    }  
                });
            });
        });
    </script>
        
</body>
</html>