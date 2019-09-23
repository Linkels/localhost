// This is certainly the worst script I've ever done.
// I apologize to humanity for this.

document.onkeyup = function(){
    pleaseUseWithExtremCaution();
	preview();
};

function pleaseUseWithExtremCaution()
{	
	var inputField = document.getElementById("input");
	var inputText = inputField.value.toLowerCase();
	var outputField = document.getElementById("output");
	
	var str1 = characters.join('');
	var re = new RegExp('[' + characters + ']', 'g');
	var outputText = inputText.replace(re, function(c){
		return markdownMatching[str1.indexOf(c)]+' ';
	});
	
	outputField.value = outputText;
}

function preview()
{	
	var inputField = document.getElementById("input");
	var inputText = inputField.value.toLowerCase();
	var previewField = document.getElementById("preview");
	
	var str1 = characters.join('');
	var re = new RegExp('[' + characters + ']', 'g');
	var previewText = inputText.replace(re, function(c){
		
		if(str1.indexOf(c) == 36) {
			return '&nbsp;&nbsp;&nbsp;'
		} else if(str1.indexOf(c) == 41) {
			return ':heavy_minus_sign:';
			alert('popo');
		} else {
			return '<img src="'+pictos[str1.indexOf(c)]+'" class="picto">';
		}
	});
	
	previewField.innerHTML = previewText;
}

var characters = [
	"0",
	"1",
	"2", 
	"3", 
	"4", 
	"5", 
	"6", 
	"7", 
	"8", 
	"9", 
	"a", 
	"b", 
	"c", 
	"d", 
	"e", 
	"f", 
	"g", 
	"h", 
	"i", 
	"j", 
	"k", 
	"l", 
	"m", 
	"n", 
	"o", 
	"p", 
	"q", 
	"r", 
	"s", 
	"t", 
	"u", 
	"v", 
	"w", 
	"x", 
	"y", 
	"z",
	" ",
	".",
	",",
	"!",
	"?",
	'-',
	"+",
	"#",
	"_",
];
	
var markdownMatching = [
	":zero:", 
	":one:",
	":two:",
	":three:",
	":four:",
	":five:",
	":six:",
	":seven:",
	":eight:",
	":nine:",
	":a:",
	":b:",
	":regional_indicator_c:",
	":regional_indicator_d:",
	":regional_indicator_e:",
	":regional_indicator_f:",
	":regional_indicator_g:",
	":regional_indicator_h:",
	":information_source:",
	":regional_indicator_j:",
	":regional_indicator_k:",
	":regional_indicator_l:",
	":m:",
	":regional_indicator_n:",
	":o:",
	":parking:",
	":regional_indicator_q:",
	":regional_indicator_r:",
	":regional_indicator_s:",
	":regional_indicator_t:",
	":regional_indicator_u:",
	":regional_indicator_v:",
	":regional_indicator_w:",
	":x:",
	":regional_indicator_y:",
	":regional_indicator_z:",
	"   ",
	":small_orange_diamond:",
	":hot_pepper:",
	":exclamation:",
	":question:",
	":heavy_minus_sign:",
	":heavy_plus_sign:",
	":hash:"
];

// https://twitter.github.io/twemoji/2/test/preview.html
var pictos = [
	"https://twemoji.maxcdn.com/2/72x72/30-20e3.png", // 0
	"https://twemoji.maxcdn.com/2/72x72/31-20e3.png", // 1
	"https://twemoji.maxcdn.com/2/72x72/32-20e3.png", // 2
	"https://twemoji.maxcdn.com/2/72x72/33-20e3.png", // 3
	"https://twemoji.maxcdn.com/2/72x72/34-20e3.png", // 4
	"https://twemoji.maxcdn.com/2/72x72/35-20e3.png", // 5
	"https://twemoji.maxcdn.com/2/72x72/36-20e3.png", // 6
	"https://twemoji.maxcdn.com/2/72x72/37-20e3.png", // 7
	"https://twemoji.maxcdn.com/2/72x72/38-20e3.png", // 8
	"https://twemoji.maxcdn.com/2/72x72/39-20e3.png", // 9
	"https://twemoji.maxcdn.com/2/72x72/1f170.png", // A
	"https://twemoji.maxcdn.com/2/72x72/1f171.png", // B
	"https://twemoji.maxcdn.com/2/72x72/1f1e8.png", // C
	"https://twemoji.maxcdn.com/2/72x72/1f1e9.png", // D
	"https://twemoji.maxcdn.com/2/72x72/1f1ea.png", // E
	"https://twemoji.maxcdn.com/2/72x72/1f1eb.png", // F
	"https://twemoji.maxcdn.com/2/72x72/1f1ec.png", // G
	"https://twemoji.maxcdn.com/2/72x72/1f1ed.png", // H
	"https://twemoji.maxcdn.com/2/72x72/2139.png", // I
	"https://twemoji.maxcdn.com/2/72x72/1f1ef.png", // J
	"https://twemoji.maxcdn.com/2/72x72/1f1f0.png", // K
	"https://twemoji.maxcdn.com/2/72x72/1f1f1.png", // L
	"https://twemoji.maxcdn.com/2/72x72/24c2.png", // M
	"https://twemoji.maxcdn.com/2/72x72/1f1f3.png", // N
	"https://twemoji.maxcdn.com/2/72x72/2b55.png", // O
	"https://twemoji.maxcdn.com/2/72x72/1f17f.png", // P
	"https://twemoji.maxcdn.com/2/72x72/1f1f6.png", // Q
	"https://twemoji.maxcdn.com/2/72x72/1f1f7.png", // R
	"https://twemoji.maxcdn.com/2/72x72/1f1f8.png", // S
	"https://twemoji.maxcdn.com/2/72x72/1f1f9.png", // T
	"https://twemoji.maxcdn.com/2/72x72/1f1fa.png", // U
	"https://twemoji.maxcdn.com/2/72x72/1f1fb.png", // V
	"https://twemoji.maxcdn.com/2/72x72/1f1fc.png", // W
	"https://twemoji.maxcdn.com/2/72x72/274c.png", // X
	"https://twemoji.maxcdn.com/2/72x72/1f1fe.png", // Y
	"https://twemoji.maxcdn.com/2/72x72/1f1ff.png", // Z
	"", // white space
	"https://twemoji.maxcdn.com/2/72x72/1f538.png", // .
	"https://twemoji.maxcdn.com/2/72x72/1f336.png", // ,
	"https://twemoji.maxcdn.com/2/72x72/2757.png", // !
	"https://twemoji.maxcdn.com/2/72x72/2753.png", // ?
	"https://twemoji.maxcdn.com/2/72x72/2796.png", // -
	"https://twemoji.maxcdn.com/2/72x72/2795.png", // +
	"https://twemoji.maxcdn.com/2/72x72/23-20e3.png", // # 
	"https://twemoji.maxcdn.com/2/72x72/2796.png", // _
];

/* btt */

var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});

/* fin du btt */