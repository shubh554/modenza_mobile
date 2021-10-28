<?php ?>

<!-- SCRIPTS -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/owl.carousel.min.js"></script>

<!-- SLIDER REVOLUTION -->
<script src="js/rev-slider/jquery.themepunch.tools.min.js"></script>
<script src="js/rev-slider/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS   -->
<script src="js/rev-slider/revolution.extension.actions.min.js"></script>
<script src="js/rev-slider/revolution.extension.carousel.min.js"></script>
<script src="js/rev-slider/revolution.extension.kenburn.min.js"></script>
<script src="js/rev-slider/revolution.extension.layeranimation.min.js"></script>
<script src="js/rev-slider/revolution.extension.migration.min.js"></script>
<script src="js/rev-slider/revolution.extension.navigation.min.js"></script>
<script src="js/rev-slider/revolution.extension.parallax.min.js"></script>
<script src="js/rev-slider/revolution.extension.slideanims.min.js"></script>
<script src="js/rev-slider/revolution.extension.video.min.js"></script>
<script src="js/interface.js"></script> 

<script>
    const counters = document.querySelectorAll(".count");
    const speed = 1;

    counters.forEach((counter) => {
    const updateCount = () => {
        const target = parseInt(+counter.getAttribute("data-target"));
        const count = parseInt(+counter.innerText);
        const increment = Math.trunc(target / speed);
        console.log(increment);

        if (count < target) {
        counter.innerText = count + increment;
        setTimeout(updateCount, 1);
        } else {
        count.innerText = target;
        }
    };
    updateCount();
    });
</script>

</body>
</html>