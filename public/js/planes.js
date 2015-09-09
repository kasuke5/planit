<script>
function random() {
	var randomnumber = Math.floor(Math.random() * (500 - 100) + 100);
	return randomnumber;
}

function plane1() {
	$(".plane2").css({right: -200, top: random()});
	$(".plane").animate({
		left: "120%"
	},{
		duration: 3000,
		complete: function() {
			setTimeout(function() {
				plane2();
			}, 5000);
		},
	})
}

function plane2() {
	$(".plane").css({left: -200, top: random()});
	$(".plane2").animate({
		right: "120%"
	},{
		duration: 3000,
		complete: function() {
			setTimeout(function() {
				plane1();
			}, 6000);
		},
	})
}

$(window).load(function(){
	setTimeout(function() {
		plane1();
	},5000)
});
</Script>