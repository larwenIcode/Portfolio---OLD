$(document).ready(function () {

    $('.sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});
const mobile = () => {
var w = window.innerWidth;
if (w <= 768) {
    var div = `    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button type="button" class="sidebarCollapse btn btn-info">
                Montrer/Reduire la sidebar
            </button>
        </div>
    </nav>`;
    $("#content").prepend(div);
    }
}