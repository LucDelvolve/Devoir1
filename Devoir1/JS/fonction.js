function GetCommandes(numCde)
{
    $.ajax
    (
        {
            type: 'get',
            url: "GetLesCommandes.php",
            data:"numCde="+numCde,
            success:function(data)
            {
                $('#divCommandes').empty();
                $('#divClients').empty();
                $('#divLivreurs').empty();
                $('#divCommandes').append(data);
            },
            error:function()
            {
                alert("Impossible de récupérer les commandes");
            }
        }
    );
}

function GetLivreurs(numLiv)
{
    $.ajax
    (
        {
            type: 'get',
            url: "GetLesLivreurs.php",
            data:"numLiv="+numLiv,
            success:function(data)
            {
                $('#divLivreurs').empty();
                $('#divCommandes').empty();
                $('#divLivreurs').append(data);
            },
            error:function()
            {
                alert("Impossible de récupérer les livreurs");
            }
        }
    );
}

function GetClients(numCli)
{
    $.ajax
    (
        {
            type: 'get',
            url: "GetLesClients.php",
            data:"numCli="+numCli,
            success:function(data)
            {
                $('#divClients').empty();
                $('#divCommandes').empty();
                $('#divClients').append(data);
            },
            error:function()
            {
                alert("Impossible de récupérer les clients");
            }
        }
    );
}

function GetPizzas(numPiz)
{
    $.ajax
    (
        {
            type: 'get',
            url: "GetLesPizzas.php",
            data:"numPiz="+numPiz,
            success:function(data)
            {
                $('#divPizzas').empty();
                $('#divLignesCommandes').empty();
                $('#divPizzas').append(data);
            },
            error:function()
            {
                alert("Impossible de récupérer les pizzas");
            }
        }
    );
}