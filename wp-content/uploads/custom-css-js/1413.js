<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
let latestScroll = 0;
window.addEventListener("scroll", () => {
	const currentScroll = window.pageYOffset;

	if (currentScroll <= 60) {
		document.body.classList.remove("scroll-up");
		return;
	}

	
	// Set the currentScroll Condition
	if (
		currentScroll > latestScroll &&
		!document.body.classList.contains("scroll-down")
	) {
		document.body.classList.remove("scroll-up");
		document.body.classList.add("scroll-down");
	} else if (
		currentScroll < latestScroll &&
		document.body.classList.contains("scroll-down")
	) {
		document.body.classList.remove("scroll-down");
		document.body.classList.add("scroll-up");
	}

	latestScroll = currentScroll;
});</script>
<!-- end Simple Custom CSS and JS -->
