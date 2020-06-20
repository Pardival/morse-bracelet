<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Morse</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	</head>

	<!-- CSS -->
	<style type="text/css">
		.borderr {
			border: 1px black solid;
		}

		.position-50 {
			position: relative;
			top: 12px;
		}

		.trait {
			height: 2px;
			background-color: #741aeb;
			border: none;
			width: 100%;
			
		}

		.cercle-separant {
			background:#522703;
		    border-radius:50%;
		    width:3px;
		    height:3px;
		    border:3px solid #522703; 
		}

		.input-message {
			width: 100%;
			font-family: 'Roboto', sans-serif;
		    color: #333;
		    font-size: 15px;
		    padding: 5px 5px;
		    border: #DDDDDD 1px solid;
		    border-radius: 0.2rem;
		    outline: none;
		    text-align:center;
		}

		.zone {
			font-size: 21px;
		}
	</style>

	<!-- Corps -->
	<body>
		<!-- Container -->
		<div class="container position-container" style="margin-top: 6%;">
				<div class="row justify-content-center">
					<!-- Premier trait -->
					<div class="col-md-2 col-sm-2 col-xs-1">
						<hr class="trait">
					</div>
					<!-- Point séparant -->
					<div class="col-md-1 col-sm-1 col-xs-1">
						<center><div class="cercle-separant position-50"></div></center>
					</div>

					<!-- Meessage en morse -->
					<div class=" zone" id="zone">
						
					</div>

					<!-- Point séparant -->
					<div class="col-md-1 col-sm-1 col-xs-1">
						<center><div class="cercle-separant position-50"></div></center>
					</div>
					<!-- Second trait -->
					<div class="col-md-2 col-sm-2 col-xs-1">
						<hr class="trait">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 ml-auto mr-auto">
						<!-- input du message -->
						<input  class="input-message" type="text" placeholder="Votre message" id="input">
					</div>
				</div>
			</div>
		</div>
	</body>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script type="text/javascript">
		class MorseCode {
		  constructor() {
		    this.DOT = 'dot';
		    this.DASH = 'dash';
		    this.SPACE = 'space';
		    this.map = {
		      'a': [this.DOT, this.DASH],
		      'b': [this.DASH, this.DOT, this.DOT, this.DOT],
		      'c': [this.DASH, this.DOT, this.DASH, this.DOT],
		      'd': [this.DASH, this.DOT, this.DOT],
		      'e': [this.DOT],
		      'f': [this.DOT, this.DOT, this.DASH, this.DOT],
		      'g': [this.DASH, this.DASH, this.DAT],
		      'h': [this.DOT, this.DOT, this.DOT, this.DOT],
		      'i': [this.DOT, this.DOT],
		      'j': [this.DOT, this.DASH, this.DASH, this.DASH],
		      'k': [this.DASH, this.DOT, this.DASH],
		      'l': [this.DOT, this.DASH, this.DOT, this.DOT],
		      'm': [this.DASH, this.DASH],
		      'n': [this.DASH, this.DOT],
		      'o': [this.DASH, this.DASH, this.DASH],
		      'p': [this.DOT, this.DASH, this.DASH, this.DOT],
		      'q': [this.DASH, this.DASH, this.DOT, this.DASH],
		      'r': [this.DOT, this.DASH, this.DOT],
		      's': [this.DOT, this.DOT, this.DOT],
		      't': [this.DASH],
		      'u': [this.DOT, this.DOT, this.DASH, this.DASH],
		      'v': [this.DOT, this.DOT, this.DOT, this.DASH],
		      'w': [this.DOT, this.DASH, this.DASH],
		      'x': [this.DASH, this.DOT, this.DOT, this.DASH],
		      'y': [this.DASH, this.DOT, this.DASH, this.DASH],
		      'z': [this.DASH, this.DASH, this.DOT, this.DOT],
		      ' ': [this.SPACE],
		      '1': [this.DOT, this.DASH, this.DASH, this.DASH, this.DASH],
		      '2': [this.DOT, this.DOT, this.DASH, this.DASH, this.DASH],
		      '3': [this.DOT, this.DOT, this.DOT, this.DASH, this.DASH],
		      '4': [this.DOT, this.DOT, this.DOT, this.DOT, this.DASH],
		      '5': [this.DOT, this.DOT, this.DOT, this.DOT, this.DOT],
		      '6': [this.DASH, this.DOT, this.DOT, this.DOT, this.DOT],
		      '7': [this.DASH, this.DASH, this.DOT, this.DOT, this.DOT],
		      '8': [this.DASH, this.DASH, this.DASH, this.DOT, this.DOT],
		      '9': [this.DASH, this.DASH, this.DASH, this.DASH, this.DOT],
		      '0': [this.DASH, this.DASH, this.DASH, this.DASH, this.DASH],
		      '.': [this.DOT, this.DASH, this.DOT, this.DASH, this.DOT, this.DASH],
		      ',': [this.DASH, this.DASH, this.DOT, this.DOT, this.DASH, this.DASH],
		      '\'': [this.DASH, this.DOT, this.DASH, this.DOT, this.DASH, this.DOT],
		      '!': [this.DASH, this.DOT, this.DASH, this.DOT, this.DASH, this.DASH],
		      '-': [this.DASH, this.DOT, this.DOT, this.DOT, this.DOT, this.DASH],
		      '&': [this.DOT, this.DASH, this.DOT, this.DOT, this.DOT],
		      '?': [this.DOT, this.DOT, this.DASH, this.DASH, this.DOT, this.DOT],
		      '/': [this.DASH, this.DOT, this.DOT, this.DASH, this.DOT],
		      '(': [this.DASH, this.DOT, this.DASH, this.DASH, this.DOT],
		      ')': [this.DASH, this.DOT, this.DASH, this.DASH, this.DOT, this.DASH],
		      ':': [this.DASH, this.DASH, this.DASH, this.DOT, this.DOT, this.DOT],
		      ';': [this.DASH, this.DOT, this.DASH, this.DOT, this.DASH, this.DOT],
		      '=': [this.DASH, this.DOT, this.DOT, this.DOT, this.DASH],
		      '+': [this.DOT, this.DASH, this.DOT, this.DASH, this.DOT],
		      '_': [this.DOT, this.DOT, this.DASH, this.DASH, this.DOT, this.DASH],
		      '"': [this.DOT, this.DASH, this.DOT, this.DOT, this.DASH, this.DOT],
		      '$': [this.DOT, this.DOT, this.DOT, this.DASH, this.DOT, this.DOT, this.DASH],
		      '@': [this.DOT, this.DASH, this.DASH, this.DOT, this.DASH, this.DOT]
		    };
		  }

		  parse(input) {
		    input = input.split('');
		    
		    
		    for (let i=0, ii=input.length; i<ii; i++) {
		      input[i] = {
		        original: input[i].toLowerCase(),
		        sequence: this.map[input[i].toLowerCase()]
		      };
		    }
		    
		    console.log(input);
		    return input;
		  }
		  
		  humanReadable(input) {
		    let text = ' ';
		    input = this.parse(input);
		    
		    for (let i=0, ii=input.length; i < ii; i++) {
		      let current = input[i];
		      
		      for (let c=0, cc=current.sequence.length; c < cc; c++) {
		        let char;
		        var toSepare = "•";
		        
		        switch (current.sequence[c]) {
		          case this.SPACE:
		            char = '\n';
		            break;
		          case this.DOT:
		            char = '•';
		            text+=char.fontcolor("#FFD700");
		            break;
		          case this.DASH:
		            char = '–';
		            text+=char.fontcolor("#FFD700");
		        }
		      }
		      
		      if (i != input.length - 1) {
		      	text += toSepare.fontcolor("#522703");
		      }
		    }
		    
		    console.log(text);
		    return text;
		  }
		}

		let morseCode = new MorseCode();

		var zone = document.getElementById('zone');
		var input = document.getElementById('input');

		input.addEventListener('keyup', (e) => {
			zone.innerHTML = "";
			zone.innerHTML = morseCode.humanReadable(input.value);
		});


	</script>
</html>