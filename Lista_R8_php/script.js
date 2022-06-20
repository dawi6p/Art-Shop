$(document).ready(()=>
{
    $('#wyszukane').load('template/produkt.php');
    $('#Cart').load('template/ProduktDoKoszyka.php');

    $('#koszyk').click(()=>
    {
        location.href = "StronaKoszyk.php";
    });

    $('#DodajDoKoszyka').click(()=>
    {
        let temp = Number(document.getElementById("quantity").value);

        $.ajax ({
            data: {"licz": temp},
            url:  'template/ProduktWKoszyku.php',
            type: 'post'
        }); 

        
        $('#koszyk').load('template/CartNumber.php');

        location.href = "StronaKoszyk.php";
    });

    $('#home').click(()=>
    {
        location.href = "StronaGlowna.php";
    });

    $('#zaloguj').click(()=>
    {
        if(document.getElementById("zaloguj").innerHTML == "Logout") 
        {
            $.ajax ({
                url:  'template/logout.php',
                type: 'post'
            }); 
            location.href = "StronaGlowna.php";
        } 
        else location.href = "StronaLogin.php";
    });

    $('#Serch').click(()=>
    {
        let id = document.getElementById("id").value;
        let Name = document.getElementById("Name").value;
        let Surname = document.getElementById("Surname").value;
        let Email = document.getElementById("Email").value;
        let Role = document.getElementById("Role").value;

        let query = "select * from users where id like '%" + id + "%' and Name like '%" + Name + "%' and Surname like '%" + Surname + "%' and Email like '%" + Email + "%' and Role like '%" + Role + "%'";

        $.ajax ({
            data: {"query": query},
            url:  'template/Query/QueryU.php',
            type: 'post'
        }); 

        $('#tabContentU').load("template/okna/OknoUsersS.php");
    });

    $('#Create').click(()=>
    {
        let Name = document.getElementById("Name").value;
        let Surname = document.getElementById("Surname").value;
        let Email = document.getElementById("Email").value;
        let Role = document.getElementById("Role").value;

        if(Role == "") Role = "User";

        let query = "insert into users (Name,Surname,Email,Password,Role) values('" + Name + "','" + Surname + "','" + Email + "','Password','" + Role + "')";

        $.ajax ({
            data: {"query": query},
            url:  'template/Query/Query.php',
            type: 'post'
        }); 

        $('#tabContentU').load("template/okna/OknoUsersS.php");
    });

    $('#Edit').click(()=>
    {
        let id = document.getElementById("id").value;
        let Name = document.getElementById("Name").value;
        let Surname = document.getElementById("Surname").value;
        let Email = document.getElementById("Email").value;
        let Role = document.getElementById("Role").value;

        if(Role == "") Role = "User";

        if(id == "") return;

        let query = "UPDATE users SET Name = '" + Name + "', Surname = '" + Surname + "', Email = '" + Email + "', Role = '" + Role + "' WHERE id = '" + id + "'";

        $.ajax ({
            data: {"query": query},
            url:  'template/Query/Query.php',
            type: 'post'
        });

        $('#tabContentU').load("template/okna/OknoUsersS.php");
    });

    $('#Delete').click(()=>
    {
        let id = document.getElementById("id").value;

        if(id == "" || id < 0) return;

        let query = "DELETE FROM users WHERE id = '" + id + "'";

        $.ajax ({
            data: {"query": query},
            url:  'template/Query/Query.php',
            type: 'post'
        }); 

        $('#tabContentU').load("template/okna/OknoUsersS.php");
    });

    $('#CreateProduct').click(()=>
    {
        let obraz = document.getElementById("obraz").value;
        let Category = document.getElementById("Category").value;
        let nazwa = document.getElementById("nazwa").value;
        let cenna = document.getElementById("cenna").value;
        let opis = document.getElementById("opisProduktu").value;

        obraz = "produkty/" + obraz; 
        if(cenna < 1) cenna = 1;

        $.ajax ({
            data: {"obraz": obraz, "Category": Category, "nazwa": nazwa, "cenna": cenna, "opis": opis},
            url:  'template/Query/QueryProdukty.php',
            type: 'post'
        });

        location.href = "StronaProdukty.php";
        $('#tabContentP').load("template/okna/OknoPrzedmiotyY.php");
    });

    $('#CreateP').click(()=>
    {
        location.href = "StronaUproduktu.php";
    });

    $('#SerchP').click(()=>
    {
        let id = document.getElementById("id").value;
        let Image = document.getElementById("Image").value;
        let Category = document.getElementById("Category").value;
        let Name = document.getElementById("Name").value;
        let Price = document.getElementById("Price").value;

        let query = "select * from produkty p INNER JOIN category c ON c.id = p.Category_id where p.Id like '%" + id + "%' and p.Obraz like '%" + Image + "%' and c.Name like '%" + Category + "%' and p.Nazwa like '%" + Name + "%' and p.Cenna like '%" + Price + "%'";

        $.ajax ({
            data: {"query": query},
            url:  'template/Query/QueryP.php',
            type: 'post'
        }); 

        $('#tabContentP').load("template/okna/OknoPrzedmiotyY.php");
    });

    $('#DeleteP').click(()=>
    {
        let id = document.getElementById("id").value;

        if(id == "" || id < 0) return;

        let query = "DELETE FROM produkty WHERE id = '" + id + "'";

        $.ajax ({
            data: {"query": query},
            url:  'template/Query/Query.php',
            type: 'post'
        }); 

        $('#tabContentP').load("template/okna/OknoPrzedmiotyY.php");
    });

    $('#wyszukaj').click(()=>
    {
        let haslo = document.getElementById("wyszukiwarka").value;

        let query = "select * from produkty p INNER JOIN category c ON c.id = p.Category_id where p.Nazwa like '%" + haslo + "%' or c.Name like '%" + haslo + "%'";;

        $.ajax ({
            data: {"query": query},
            url:  'template/Query/QueryS.php',
            type: 'post'
        }); 

        location.href = "StronaWyszukanie.php";
    });
});