// JavaScript source code
function main() {
				var ans1 = document.getElementById('variant1').value;
                var ans2 = document.getElementById('variant2').value;
				var answer1=0, answer2=0,v;
				switch (ans1) {
					case '1':
						answer1=4990;
					break;
					case '2':
						answer1=7990;
					break;
					case '3':
						answer1=9990;
					break;
				}
                switch (ans2) {
					case '1':
						answer2=15000;
					break;
					case '2':
						answer2=40000;
					break;
					case '3':
						answer2=85000;
					break;
				}
                mainans = answer1+answer2
				document.getElementById('result').innerHTML = mainans;
			}
            document.getElementById('calcus').addEventListener('click', main);