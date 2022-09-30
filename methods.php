<?php
include "./php/conn.php";
// products========================================================

// fun to get single product
function getSingleProduct($id)
{
    $stmt = connect()->prepare('SELECT * FROM products WHERE id = ?;');
    $stmt->execute(array($id));


    return $stmt->fetchAll();
}
// fun to get all products
function getAllProduct()
{
    $stmt = connect()->prepare('SELECT * FROM products ;');
    $stmt->execute();


    return $stmt->fetchAll();
}

// fun to get products from category
function getProductsFromCategory($category_id)
{
    $stmt = connect()->prepare('SELECT * FROM products WHERE category_id = ?;');
    $stmt->execute(array($category_id));


    return $stmt->fetchAll();
}

// fun to get products from that have discount
function getProductsWithDiscount()
{
    $stmt = connect()->prepare('SELECT * FROM products;');
    $stmt->execute();
    $allData =  $stmt->fetchAll();
    $disProducts = [];
    foreach ($allData as $product) {
        if ($product["discount"] and ($product["discount"] == 0 or $product["discount"] != $product["price"])) {

            array_push($disProducts, $product);
        }
    }
    return $disProducts;
}

// fun to get all categories
function getAllCategories()
{
    $stmt = connect()->prepare('SELECT * FROM categories ;');
    $stmt->execute();


    return $stmt->fetchAll();
}

// user ==========================================================================

// fun to get user info
function getUserInfo($id)
{
    $stmt = connect()->prepare('SELECT * FROM users_info WHERE id = ?;');
    $stmt->execute(array($id));


    return $stmt->fetchAll();
}


// fun to get invoice for user
function getInvoicesForUser($userId)
{
    $stmt = connect()->prepare('SELECT * FROM invoice WHERE user_id = ?;');
    $stmt->execute(array($userId));


    return $stmt->fetchAll();
}
// fun to get invoice details
function getInvoicesDetails($id)
{

    $stmt1 = connect()->prepare('SELECT *
        FROM
            products a
                INNER JOIN
            p_order b
                ON a.id = b.product_id
                INNER JOIN 
            invoice c
                ON b.invoice_id = c.id WHERE c.id = ?;');

    $stmt1->execute(array($id));

    $productsForInvoice = $stmt1->fetchAll();

    return $productsForInvoice;
}
// fun to edit user data by user 
function editUser($name, $address, $phone, $email, $pwd, $dob, $img)
{
    $stmt = connect()->prepare(
        "UPDATE users_info SET (name, address, phone, email, pwd, dob, img) VALUES (?,?,?,?,?,?,?)"
    );
    $stmt->execute(array($name, $address, $phone, $email, $pwd, $dob, $img));
    $users = $stmt->fetchAll();
    return $users;
}


// admin============================================================================================
// fun to get all users
function getAllUsers()
{
    $stmt = connect()->prepare(
        "SELECT * FROM users_info;"
    );
    $stmt->execute();
    $users = $stmt->fetchAll();
    return $users;
}
// fun to get one user
function getOneUser($id)
{
    $stmt = connect()->prepare(
        "SELECT * FROM users_info WHERE id = ?;"
    );
    $stmt->execute(array($id));
    $users = $stmt->fetchAll();
    return $users;
}
// fun to edit user / admin end
function editUserAdmin($id, $name, $address, $phone, $email, $pwd, $dob, $img, $role)
{
    $stmt = connect()->prepare(
        "UPDATE users_info SET name=?, address=?, phone=?, email=?, pwd=?, dob=?, img=?, role=?  WHERE id =? "
    );
    $stmt->execute(array($name, $address, $phone, $email, $pwd, $dob, $img, $role, $id));
    header("http://localhost/jazzbeans/admin.php");
}
// fun to del any user
function delUser($id)
{
    $stmt = connect()->prepare(
        "DELETE FROM users_info WHERE id = ?;"
    );
    $stmt->execute(array($id));
    header("http://localhost/jazzbeans/admin.php");
}
// fun to get all categories PS: its in the products section

// fun to create a category
function createCategory($name, $img, $description)
{
    $stmt = connect()->prepare(
        "INSERT INTO categories (name, img, description) VALUES (?,?,?) ;"
    );
    $stmt->execute(array($name, $img, $description));
    header("http://localhost/jazzbeans/admin.php");
}
// fun to edit any category
function editCategory($id, $name, $img, $description)
{
    $stmt = connect()->prepare(
        "UPDATE users_info SET name=?, img=?, description=?  WHERE id =? "
    );
    $stmt->execute(array($name, $img, $description, $id));
    header("http://localhost/jazzbeans/admin.php");
}
// fun to del any category
function delCategory($id)
{
    $stmt = connect()->prepare(
        "DELETE FROM categories WHERE id = ?;"
    );
    $stmt->execute(array($id));
    header("http://localhost/jazzbeans/admin.php");
}
// fun to get all products P.S its in the products section

// fun to create a product 
function createProduct($name, $price, $discount, $category_id, $description, $short_desc, $img, $tags)
{
    $stmt = connect()->prepare(
        "INSERT INTO products (name, price, discount, category_id, description, short_desc, img, tags) VALUES (?,?,?,?,?,?,?,?) ;"
    );
    $stmt->execute(array($name, $price, $discount, $category_id, $description, $short_desc, $img, $tags));
    header("http://localhost/jazzbeans/admin.php");
}
// fun to edit any product
function editProduct($id, $name, $price, $discount, $category_id, $description, $short_desc, $img, $tags)
{
    $stmt = connect()->prepare(
        "UPDATE products SET name=?, price=?, discount=?, category_id=?, description=?, short_desc=?, img=?, tags=?   WHERE id =? "
    );
    $stmt->execute(array($name, $price, $discount, $category_id, $description, $short_desc, $img, $tags, $id));
    header("http://localhost/jazzbeans/admin.php");
}
// fun to del any product
function delProduct($id)
{
    $stmt = connect()->prepare(
        "DELETE FROM products WHERE id = ?;"
    );
    $stmt->execute(array($id));
    header("http://localhost/jazzbeans/admin.php");
}

// checkout========

// send To the Product Page for any Product any where just remember to echo its "id" after u run the function 
function sendToProductPage()
{
    echo "http://localhost/jazzbeans/?id=";
}
// print_r(getProductsFromCategory(1)["name"]);
// foreach (getProductsFromCategory(1) as $product) {
//     echo $product["name"] . "<br>";
// }
