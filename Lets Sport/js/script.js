// toggle class active
const navbarNav = document.querySelector(".navbar-nav");
// ketika humburger menu di klik
document.querySelector("#humburger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};
document.addEventListener('DOMContentLoaded', function() {});

async function checkIfSignedIn() {
  const response = await fetch('http://localhost:3000/check-auth');
  console.log(response)
  if (response.ok) {
      window.location.href = './reservation.php';
      return;
  }

  window.location.href = './signin.php';
}
