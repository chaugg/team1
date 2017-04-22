<?php include_once 'partial/header.php'; ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Learn KATAKANA</title>


  <link rel='css/bootstrap.min.css'>

      <style media="screen">
      body {
        background-image: url(uploads/hoa.png);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
      }

      .frontline {
        text-align: center;
        background-color: rgba(255, 44, 44, 0.8);
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
      }

      table {
        margin: auto;
        border-style: double;
        border-width: 15px;
        border-color: #ff2c2c;
      }

      tr {
        border-style: inset;
        border-color: rgba(120, 55, 55, 0.7);
        border-width: 4px;
        text-align: center;
      }

      td {
        user-select: none;
        cursor: pointer;
        background-color: rgba(255, 200, 200, 0.5);
        width: 13vw;
        height: 20vh;
        min-width: 8vmax;
        min-height: 16vmin;
        border-style: outset;
        border-color: rgba(100, 166, 175, 0.4);
        font-style: italic;
        font-weight: bold;
        font-size: 7vmin;
        box-shadow: 2px 3px 2px 3px black;
        transition: .5s;
        text-shadow: 0 0 2 #777;
      }

      td:hover {
        background-color: rgba(255, 150, 150, 0.8);
      }

      .jpbgi {
        background-image: url(uploads/flag.jpg);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        overflow: hidden;
        font-style: normal;
        box-shadow: none;
      }

      .jpbgi:hover {
        color: white;
      }

      @media screen and (max-height: 280px) {
        td {
          min-width: 90px;
          width: 100px;
          height: 100px;
          font-size: 35px;
          padding: 4px;
        }
      }
      @media screen and (max-width: 400px) {
        td {
          height: 60px;
          min-width: 50px;
        }
      }

      </style>


</head>

<body>
  <div class="container">

  <div class="frontline">
    <div class="row">
    <div class="col-lg-12"><h1>KATAKANA ALPHABET</h1></div>
    </div>
  </div>
  <table>
  <tr>
      <td>A</td><td>I</td><td>U</td><td>E</td><td>O</td>
      </tr>
  <tr>
  <td>KA</td><td>KI</td><td>KU</td><td>KE</td><td>KO</td>
      </tr>

    <tr>
      <td>SA</td><td>SHI</td><td>SU</td><td>SE</td><td>SO</td>
    </tr>
    <tr>
      <td>NA</td><td>NI</td><td>NU</td><td>NE</td><td>NO</td>
    </tr>
    <tr>
      <td>TA</td><td>CHI</td><td>TSU</td><td>TE</td><td>TO</td>
    </tr>
    <tr>
      <td>HA</td><td>HI</td><td>FU</td><td>HE</td><td>HO</td>
    </tr>
    <tr>
      <td>RA</td><td>RI</td><td>RU</td><td>RE</td><td>RO</td>
    </tr>
    <tr>
    <td>YA</td><td></td><td>YU</td><td></td><td>YO</td>
    </tr>
    <tr>
      <td>WA</td><td></td><td></td><td></td><td>WO</td>
    </tr>
    <tr>
     <td></td><td></td><td>N</td><td></td><td></td>
    </tr>
  </table>
</div>
  <script src='js/jquery-3.2.1.min.js'></script>

    <script>"use strict";
    $(document).ready(function () {
        $("td").addClass("change");
        $("td.change").click(function () {
            var str = $(this).text();
            if ($(this).hasClass("jpbgi")) {
                $(this).removeClass("jpbgi");
            }
            else
                $(this).addClass("jpbgi");
            switch (str) {
                case 'A': {
                    $(this).text("ア");
                    break;
                }
                case 'I': {
                    $(this).text("イ");
                    break;
                }
                case 'U': {
                    $(this).text("ウ");
                    break;
                }
                case 'E': {
                    $(this).text("エ");
                    break;
                }
                case 'O': {
                    $(this).text("オ");
                    break;
                }
                case 'KA': {
                    $(this).text("カ");
                    break;
                }
                case 'KI': {
                    $(this).text("キ");
                    break;
                }
                case 'KU': {
                    $(this).text("ク");
                    break;
                }
                case 'KE': {
                    $(this).text("ケ");
                    break;
                }
                case 'KO': {
                    $(this).text("コ");
                    break;
                }
                case 'SA': {
                    $(this).text("サ");
                    break;
                }
                case 'SHI': {
                    $(this).text("シ");
                    break;
                }
                case 'SU': {
                    $(this).text("ス");
                    break;
                }
                case 'SE': {
                    $(this).text("セ");
                    break;
                }
                case 'SO': {
                    $(this).text("ソ");
                    break;
                }
                case 'NA': {
                    $(this).text("ナ");
                    break;
                }
                case 'NI': {
                    $(this).text("ニ");
                    break;
                }
                case 'NU': {
                    $(this).text("ヌ");
                    break;
                }
                case 'NE': {
                    $(this).text("ネ");
                    break;
                }
                case 'NO': {
                    $(this).text("ノ");
                    break;
                }
                case 'TA': {
                    $(this).text("タ");
                    break;
                }
                case 'CHI': {
                    $(this).text("チ");
                    break;
                }
                case 'TSU': {
                    $(this).text("ツ");
                    break;
                }
                case 'TE': {
                    $(this).text("テ");
                    break;
                }
                case 'TO': {
                    $(this).text("ト");
                    break;
                }
                case 'HA': {
                    $(this).text("ハ");
                    break;
                }
                case 'HI': {
                    $(this).text("ヒ");
                    break;
                }
                case 'FU': {
                    $(this).text("フ");
                    break;
                }
                case 'HE': {
                    $(this).text("ヘ");
                    break;
                }
                case 'HO': {
                    $(this).text("ホ");
                    break;
                }
                case 'RA': {
                    $(this).text("ラ");
                    break;
                }
                case 'RI': {
                    $(this).text("リ");
                    break;
                }
                case 'RU': {
                    $(this).text("ル");
                    break;
                }
                case 'RE': {
                    $(this).text("レ");
                    break;
                }
                case 'RO': {
                    $(this).text("ロ");
                    break;
                }
                case 'YA': {
                    $(this).text("ヤ");
                    break;
                }
                case 'YU': {
                    $(this).text("ユ");
                    break;
                }
                case 'YO': {
                    $(this).text("ヨ");
                    break;
                }
                case 'WA': {
                    $(this).text("ワ");
                    break;
                }
                case 'WO': {
                    $(this).text("ヲ");
                    break;
                }
                case 'N': {
                    $(this).text("ン");
                    break;
                }
                //Movin' Back
                case 'ア': {
                    $(this).text("A");
                    break;
                }
                case 'イ': {
                    $(this).text("I");
                    break;
                }
                case 'ウ': {
                    $(this).text("U");
                    break;
                }
                case 'エ': {
                    $(this).text("E");
                    break;
                }
                case 'オ': {
                    $(this).text("O");
                    break;
                }
                case 'カ': {
                    $(this).text("KA");
                    break;
                }
                case 'キ': {
                    $(this).text("KI");
                    break;
                }
                case 'ク': {
                    $(this).text("KU");
                    break;
                }
                case 'ケ': {
                    $(this).text("KE");
                    break;
                }
                case 'コ': {
                    $(this).text("KO");
                    break;
                }
                case 'サ': {
                    $(this).text("SA");
                    break;
                }
                case 'シ': {
                    $(this).text("SHI");
                    break;
                }
                case 'ス': {
                    $(this).text("SU");
                    break;
                }
                case 'セ': {
                    $(this).text("SE");
                    break;
                }
                case 'ソ': {
                    $(this).text("SO");
                    break;
                }
                case 'ナ': {
                    $(this).text("NA");
                    break;
                }
                case 'ニ': {
                    $(this).text("NI");
                    break;
                }
                case 'ヌ': {
                    $(this).text("NU");
                    break;
                }
                case 'ネ': {
                    $(this).text("NE");
                    break;
                }
                case 'ノ': {
                    $(this).text("NO");
                    break;
                }
                case 'タ': {
                    $(this).text("TA");
                    break;
                }
                case 'チ': {
                    $(this).text("CHI");
                    break;
                }
                case 'ツ': {
                    $(this).text("TSU");
                    break;
                }
                case 'テ': {
                    $(this).text("TE");
                    break;
                }
                case 'ト': {
                    $(this).text("TO");
                    break;
                }
                case 'ハ': {
                    $(this).text("HA");
                    break;
                }
                case 'ヒ': {
                    $(this).text("HI");
                    break;
                }
                case 'フ': {
                    $(this).text("FU");
                    break;
                }
                case 'ヘ': {
                    $(this).text("HE");
                    break;
                }
                case 'ホ': {
                    $(this).text("HO");
                    break;
                }
                case 'ラ': {
                    $(this).text("RA");
                    break;
                }
                case 'リ': {
                    $(this).text("RI");
                    break;
                }
                case 'ル': {
                    $(this).text("RU");
                    break;
                }
                case 'レ': {
                    $(this).text("RE");
                    break;
                }
                case 'ロ': {
                    $(this).text("RO");
                    break;
                }
                case 'ヤ': {
                    $(this).text("YA");
                    break;
                }
                case 'ユ': {
                    $(this).text("YU");
                    break;
                }
                case 'ヨ': {
                    $(this).text("YO");
                    break;
                }
                case 'ワ': {
                    $(this).text("WA");
                    break;
                }
                case 'ヲ': {
                    $(this).text("WO");
                    break;
                }
                case 'ン': {
                    $(this).text("N");
                    break;
                }
            }
        });
    });</script>

</body>
</html>
