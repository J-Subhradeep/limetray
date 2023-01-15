<div class="nav-main">
	<div class="nav-logo">
		<img src="./static/limetray-logo.png" class="nav-logo-img" alt="" />
	</div>
	<div class="nav-menu" id="nav-menu">
		<div class="nav-product" id="products">
			Products <i class="fa-solid fa-caret-down"></i>
			<div id="product-hover-element"></div>
		</div>
		<div class="nav-product" id="businesses">
			Business type <i class="fa-solid fa-caret-down"></i>
			<div id="businesse-hover-element"></div>
		</div>
		<div class="nav-product">Clients</div>
		<button class="nav-product btn btn-primary">Request free demo</button>
	</div>
</div>
<script>
	let products = document.getElementById("products");
	products.addEventListener("mouseenter", () => {
		if (document.getElementById("businesse-hover-element"))
			document.getElementById("businesse-hover-element").style.display = "none";
		document.getElementById("product-hover-element").style.display = "block";
	});
	if (document.getElementById("product-hover-element")) {
		document
			.getElementById("product-hover-element")
			.addEventListener("mouseleave", () => {
				document.getElementById("product-hover-element").style.display = "none";
			});
		document.getElementById("nav-menu").addEventListener("mouseleave", () => {
			document.getElementById("product-hover-element").style.display = "none";
		});
	}
	let businesses = document.getElementById("businesses");
	businesses.addEventListener("mouseenter", () => {
		if (document.getElementById("product-hover-element"))
			document.getElementById("product-hover-element").style.display = "none";
		document.getElementById("businesse-hover-element").style.display = "block";
	});
	if (document.getElementById("businesse-hover-element")) {
		document
			.getElementById("businesse-hover-element")
			.addEventListener("mouseleave", () => {
				document.getElementById("businesse-hover-element").style.display =
					"none";
			});
		document.getElementById("nav-menu").addEventListener("mouseleave", () => {
			document.getElementById("businesse-hover-element").style.display = "none";
		});
	}
</script>
