<?php 
$pageTitle = "Sign Up";
include 'header.php'; 
?>

<div class="container my-5">
    <h2 class="text-center">Sign Up</h2>
    <form>
        <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email">
        </div>
        <button type="submit" class="btn btn-success btn-block">Daftar</button>
    </form>
</div>

<?php include 'footer.php'; ?>
