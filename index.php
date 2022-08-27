<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div class="navbar">
        <nav>
            <a href="#">Home</a> |
            <a href="#">About</a> |
            <a href="#">Contact</a> |
            <a href="#">Blog</a> |
            <a href="#">FAQ</a>            
        </nav>
    </div>
    <hr />
    <br />
    <br />
    <br />

    <div class="container">
        <h1>This is Headline One</h1>
        <h2>This is Headline Two</h2>
        <h3>This is Headline Three</h3>
        <h4>This is Headline Four</h4>
        <h5>This is Headline Five</h5>
        <h6>This is Headline Six</h6>

        <figure>
            <img src="user.png" alt="hruy">
        </figure>

        <p class="paragraph">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem officiis aut architecto nisi? Iusto illum adipisci sit quasi optio commodi, cumque ut consequatur
            dolorem eius non ea vitae, vel labore.
        </p>

        <ul>
            <li><a href="#">My Unorder List One</a></li>
            <li><a href="#">My Unorder List Two</a></li>
            <li><a href="#">My Unorder List Three</a></li>
            <li><a href="#">My Unorder List Four</a></li>
            <li><a href="#">My Unorder List Five</a></li>
            <li><a href="#">My Unorder List Six</a></li>
        </ul>

        <ol start="10">
            <li><a href="#">My Order List One</a></li>
            <li><a href="#">My Order List Two</a></li>
            <li><a href="#">My Order List Three</a></li>
            <li><a href="#">My Order List Four</a></li>
            <li><a href="#">My Order List Five</a></li>
            <li><a href="#">My Order List Six</a></li>
        </ol>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13292.045404228144!2d90.3994364041148!3d24.73478730806139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37564f4e5b7faadd%3A0x70bc3f86f06e51cd!2sCar%20Expert!5e0!3m2!1sen!2sbd!4v1661076508612!5m2!1sen!2sbd"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <hr />
    <br />
    <br />
    <br />

    <div class="form_section">
        <form action="" method="POST">
            <div class="form_group">
                <label for="" class="form_label">Name:</label>
                <input type="text" name="name" placeholder="Your Name..." class="form_control" />
            </div>
            <div class="form_group">
                <label for="" class="form_label">Father's Name:</label>
                <input type="text" name="father_name" placeholder="Your Father's Name..." class="form_control" />
            </div>
            <div class="form_group">
                <label for="" class="form_label">Email:</label>
                <input type="text" name="email" placeholder="Your Email..." class="form_control" />
            </div>
            <div class="form_group">
                <label for="" class="form_label">Mobile:</label>
                <input type="text" name="mobile" placeholder="Your Mobile..." class="form_control" />
            </div>
            <div class="form_group">
                <label for="" class="form_label">Address:</label>
                <textarea name="address" placeholder="Your Address..." class="form_control"></textarea>
            </div>
            <input type="reset" name="send" value="Reset">
            <input type="submit" name="send" value="Submit">
        </form>
    </div>
    <hr />
    <br />
    <br />
    <br />

    <div class="table_section">
        <table class="table table_bordered" style="border-collapse: collapse;" border="1">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Father Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01</td>
                    <td>Md. Abdullah Al Ahsan</td>
                    <td>Md. Abdur Rahman</td>
                    <td>abdullahalahsan333@gmail.com</td>
                    <td>+8801969552552</td>
                    <td>53/20, Razbollobpur, Sherpur Town, Sherpur</td>
                    <td>
                        <a href="#" class="view">View</a>
                        <a href="#" class="edit">Edit</a>
                        <a href="#" class="delete" onclick="return confirm('Are you sure want to delete this Data?');">delete</a>
                    </td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Md. Abdullah Al Ahsan</td>
                    <td>Md. Abdur Rahman</td>
                    <td>abdullahalahsan333@gmail.com</td>
                    <td>+8801969552552</td>
                    <td>53/20, Razbollobpur, Sherpur Town, Sherpur</td>
                    <td>
                        <a href="#" class="view">View</a>
                        <a href="#" class="edit">Edit</a>
                        <a href="#" class="delete" onclick="return confirm('Are you sure want to delete this Data?');">delete</a>
                    </td>
                </tr>
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
    

    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
</body>
</html>
