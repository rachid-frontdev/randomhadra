<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>random hadra </title>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open Sans"/>
        <style>
            body {
                text-align: center;
            }
            .hikma {

                text-decoration: underline;
            }
            .hikma,.person {
                font-size: 1.3em;
                font-style: italic;
            }
            .person {
                font-family: 'Open Sans', sans-serif;
                text-transform: capitalize;
                padding:10px;
                letter-spacing: 3px;
            }
            .innertxt  {
                    width: 200px;
                color:#ffff;
                display: none;
                background: red;
                padding:10px 20px;
                margin: 6px auto;
                border-radius: 1em;

            }
            a {
                color:aqua;
                font-size: 1.4em;
            }
            #triste {
    width: 31px;
    height: 31px;
    position: absolute;
            }
        </style>
	</head>
	<body>
        <img src="LOGO.jpg" alt='university mohammed khider biskra'>
        <div class="hikma"></div>
        <div class="person"></div>
        <div class='innertxt' dir="rtl">
لابغيتو زعما اضربو طلة         
            <a href="https://www.instagram.com/rachid.benharzallah">هنا<img id="triste" src="triste.png" alt="triste"></a>
        </div>
        
        <audio controls autoplay>
  <source src="Kami PhenomeneCoupable.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>

<script>
    const homme = ['ana','anwar','abdelkader','fares', 'khalil', 'rachid'];
    const femme= ['assia', 'abir', 'halima', 'nouha', 'amira', 'amani', 'afef', 'hafida', 'sara', 'amjad', 'rayane', 'nour'];
    const mix = homme.concat(femme);
    
        var hikm = [{
    question: "ناس هابلة عليها",
    choices: femme,
}, {
    hikma: "مريول ووحدة وماداته فيه",
    choices: homme
    },  {
    hikma: "تكمل حياتها بايرة",
    choices: femme
    }, {
    hikma: "تسوق ولاتسوقي موطوك بعد كونطرول",
    choices: mix
    }, {
    hikma: "عايش ولاعايشة بصوارد papa",
    choices: mix
    }, {
    hikma: "العاقلة والمليحة تع الكلاصة",
    choices: femme
    }, {
    hikma: "القراية كون جات بنادم",
    choices: mix
    }, {
    hikma: "لي محبتش تمدلك نيمروها ",
    choices:femme
    }, {
    hikma: "لي تعجبك الهدرة معاها ولامعاه",
    choices: mix
    }, {
    hikma: "لي يهدر وتهدر في ناس قاع",
    choices: mix
    }, {
    hikma: "العميقة تع الكلاصة",
    choices: femme
    }, {
    hikma: "العميق تع الكلاصة",
    choices: homme
    },{
    hikma: "كون تتلاقاها برا تعنقها",
    choices: femme
    }, {
    hikma: " نهار كومبلي يسلف وميخلص كريدي لي عليه",
    choices: homme
    },{
    hikma: " كون تتلاقايه تقوليلو صاحبتك خاينة",
    choices: homme
    },{
    hikma: " كون تنحيلو الستيلو يبكو هي ولاهو",
    choices: mix
    },{
    hikma: "ماماه طلقت باباه هو ولا هي",
    choices: mix
    }]; // 0(n)
    let randomHikma = hikm[Math.floor(Math.random() * hikm.length)];
    let randomPerInChoice =   Math.floor(Math.random()*randomHikma.choices.length);
    let randomChoices = randomHikma.choices[randomPerInChoice];
document.querySelector('.hikma').textContent = randomHikma.hikma;
    document.querySelector('.person').textContent = randomChoices;
    window.setTimeout(() => {
        document.querySelector('.innertxt').style.display = 'block';
    }, 5000)
        </script>
	</body>
</html>