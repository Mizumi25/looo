<div class="brand clearfix">
	<span class="menu-btn"><i class="fa fa-bars"></i>		<a href="#" class="logo">Hostel</a></span>

		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a href="#"><img src="img/software-engineer.png" class="ts-avatar" alt=""> Admin <i class="fa fa-solid fa-chevron-down"></i></a>
				<ul>
					<li><a href="admin-profile.php">My Account</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Flip.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Observer.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Draggable.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/MotionPathPlugin.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/EaselPlugin.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/PixiPlugin.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>


<!-- RoughEase, ExpoScaleEase and SlowMo are all included in the EasePack file -->    
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/EasePack.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/CustomEase.min.js"></script>

<script>
 // use a script tag or an external JS file
 document.addEventListener("DOMContentLoaded", (event) => {
  gsap.registerPlugin(Flip,ScrollTrigger,Observer,ScrollToPlugin,Draggable,MotionPathPlugin,EaselPlugin,PixiPlugin,TextPlugin,RoughEase,ExpoScaleEase,SlowMo,CustomEase)
  // gsap code here!
 });

</script>

<script>
	const accountLabel = document.querySelector('.ts-account a')
 	const dropdown = document.querySelector('.ts-account ul')
	const dropdownAnimaton = gsap.to(dropdown, {
		duration: 0.3,
		opacity: 1,
		y: 20,
		ease: "power2.out"
	})
	accountLabel.addEventListener('click', () => {
		if (dropdown.style.display === 'block') {
			dropdownAnimaton.reverse()
			setTimeout(() => {
				dropdown.style.display = "none"
			}, 500);
		} else {
			dropdown.style.display = "block"
			dropdownAnimaton.play()
		}
	})
</script>