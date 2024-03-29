<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
            <title></title>
        </head>
    <body>

         <div class="container">
            <?=form_open_multipart('CrudController/add_data')?>
            <div class="row mt-5">
                <div class="col-md-12 col-lg-12">
                    <div class="col-md-6 col-lg-6 mb-3">
                        <label>Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Full name">
                        <?=form_error('name')?>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="email">
                        <?=form_error('email')?>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3">
                        <label>Phone</label>
                        <input type="number" name="phone" class="form-control" placeholder="phone">
                        <?=form_error('phone')?>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3">>
                        <label>Language</label>
                        <select calss="form-control" name="language">
                                <option value="">select</option>
                                <option value="PHP">php</option>
                                <option value="JAVA">JAVA</option>
                                <option value="Pythan">Pythan</option>
                        </select>
                        <?=form_error('language')?>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3">
                        <label>Gender</label>
                        <div class="form-group">
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3">
                        <label>Qualification</label>
                        <div class="form-group">
                        <input type="checkbox" name="qualification" value="BCA">BCA
                        <input type="checkbox" name="qualification" value="MCA">MCA
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3">
                        <label>Image/Document</label>
                        <input type="file" name="image" class="form-control">
                        <?=form_error('image')?>
                    </div>
                    <input type="submit" name="" class="btn btn-info">


                </div>
            </div>
  
         </div>

    </body>
</html>