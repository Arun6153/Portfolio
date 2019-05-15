function splitScroll()
{
	const controller = new ScrollMagic.Controller();
	new ScrollMagic.Scene({
         duration:'300%',
         triggerElement:'.head-t',
         triggerHook: 0
	})
	.setPin('.head-t')
	.addIndicators()
	.addTo(controller);
}

splitScroll();