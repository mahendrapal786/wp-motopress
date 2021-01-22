   $(window).load(function(){
      $('.marquee').marquee({
      	speed: 100,
      	duplicated: false,
      	gap: 50,
      	delayBeforeStart: 0,
      },function(){
      	console.log('callback');
      });
   });
