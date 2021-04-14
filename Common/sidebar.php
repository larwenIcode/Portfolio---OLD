<div class="wrapper">
<!-- Sidebar  -->
<nav id="sidebar">
<div class="sidebar-header sidebarCollapse">
<picture>
    <source srcset="CSS/images/Mode Nuit.png" media="(prefers-color-scheme: dark)">
    <img src="CSS/images/Mode Normal.png" alt="Logo" width="80px">
</picture>
</div>

<ul class="list-unstyled components">
<li id="index">
<a href="index.html">
<i class="bi bi-house"></i> Home</a>
</a>
</li>
<!-- partie admin sinon login -->
<?php 
if (isset($_SESSION['user'])) {
    echo
    "<li id='Admin'>
    <a href='Admin.html'>
    <i class='bi bi-code-square'></i>
    Admin
    </a>
    </li>"
    ;
} else {
    echo "
    <li id='Login'>
    <a href='Login.html'>
    <i class='bi bi-key'></i>
    Login
    </a>
    </li>
    ";}
?>
<!-- Fin de la partie Login/Admin -->
<li>    
<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
<i class="bi bi-file"></i>
Pages
</a>
<ul class="collapse list-unstyled" id="pageSubmenu">
<li id="CV">
<a href="CV.html">
<i class="bi bi-file-person"></i>CV
</a>
</li>
<li id="Competences">
<a href="Competences.html">
<i class="bi bi-check-circle"></i>Mes Compétences
</a>
</li>
<li id="interets">
<a href="interets.html">
<i class="bi bi-heart"></i>Mes Intérets
</a>
</li>
<li id="experiences">
<a href="experiences.html">
<i class="bi bi-award"></i>Mes Expériences
</a>
</li>
</ul>
</li>
<li id="contact">
<a href="Contact.html">
<i class="bi bi-telephone-outbound"></i>
Contact
</a>
</li>
<?php 
if (isset($_SESSION['user'])) {
    echo "
    <li id='Logout'>
    <a href='Logout.html'>
    <i class='bi bi-door-open'></i>
    Déconnexion
    </a>
    </li>    
";}
?>
</ul>

</nav>

<!-- Page Content  -->
<div id="content">