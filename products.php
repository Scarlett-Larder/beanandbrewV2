<?php 
    include("connection.php");
?>
<?php 
    include("header.php");
?>
<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="main.css" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Aleo&display=swap');
  </style>
</head>

<body>
    <div class="">
            <item class="" id="dataList"></item>
    </div>



    <script>
        document.addEventListener('DOMContentLoaded', () => {
            fetchData();
        });

        async function fetchData() {
            try {
                const response = await fetch('product_script.php');
                const data = await response.json();
                
                const dataList = document.getElementById('dataList');
                const outputContainer = document.getElementById('outputContainer');

                data.forEach(item => {
                    const productItem = document.createElement('div');
                    productItem.classList.add('product-item');
                    const listItem = document.createElement('item');
                    listItem.innerHTML = `<div class="prod_text">${item.name} ${item.price}</div>`;
                    // Create an img element and set its src to the Base64-encoded image data
                    const imgElement = document.createElement('img');
                    imgElement.src = `data:image/png;base64,${item.img_url}`;
                    imgElement.alt = 'User Photo';
                    imgElement.classList.add('prod_img2');
                    productItem.appendChild(listItem);
                    productItem.appendChild(imgElement)
                    dataList.appendChild(productItem);
                });
            } catch (error) {
                console.error('Error fetching data:', error);
            }
        }
    </script>
        
</body>


</html>