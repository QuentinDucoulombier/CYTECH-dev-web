<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css" />
        <title>Blog Random</title>
        <script type="text/javascript" src="../js/script.js"></script>
      
    </head>
    <body>
        
        <header id="Header">
            <?php include 'header.php'; ?>  
        </header>
        <section id="Menu">
            <?php include 'menu.php'; ?>
        </section>
        <section id="Main">
            
            <section id="main100km">
                <p></p>
                <h2>De 100 à 300 km</h2>
                <table>
                    <thead>
                        <th>Direction</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th class="stock">Stock</th>
                        <th>Commande</th>
                        <th>Photo</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nord</td>
                            <td>On va vers le Nord</td>
                            <td>100 €</td>
                            <td class="stock" data-direction="Nord">15</td>
                            <td>
                                <button type="button" class="minus" data-direction="Nord">-</button>
                                <input type="text" readonly class="quantity" value="0"/>
                                <button type="button" class="plus" data-direction="Nord">+</button>
                                
                                <p></p>
                                <button type="button" class="add-to-cart" data-direction="Nord">Ajouter au panier</button>
                            </td>
                            <td><img src="https://cdn-icons-png.flaticon.com/512/16/16797.png" alt="Boussole vers le nord" class="imgIll"  \></td>
                        </tr>
                        <tr>
                            <td>Ouest</td>
                            <td>On va vers le Ouest</td>
                            <td>100 €</td>
                            <td class="stock" data-direction="Ouest">5</td>
                            <td>
                                <button type="button" class="minus" data-direction="Ouest">-</button>
                                <input type="text" readonly class="quantity" value="0"/>
                                <button type="button" class="plus" data-direction="Ouest">+</button>
                                
                                <p></p>
                                <button type="button" class="add-to-cart" data-direction="Ouest">Ajouter au panier</button>
                            </td>
                            <td><img src="https://cdn-icons-png.flaticon.com/512/17/17276.png" alt="Boussole vers l'ouest" class="imgIll" \></td>
                        </tr>
                        <tr>
                            <td>Sud</td>
                            <td>On va vers le Sud</td>
                            <td>100 €</td>
                            <td class="stock" data-direction="Sud">5</td>
                            <td>
                                <button type="button" class="minus" data-direction="Sud">-</button>
                                <input type="text" readonly class="quantity" value="0"/>
                                <button type="button" class="plus" data-direction="Sud">+</button>
                                
                                <p></p>
                                <button type="button" class="add-to-cart" data-direction="Sud">Ajouter au panier</button>
                            </td>
                            <td><img src="https://cdn-icons-png.flaticon.com/512/16/16744.png" alt="Boussole vers le sud" class="imgIll" \></td>
                        </tr>
                            <td>Est</td>
                            <td>On va vers le Est</td>
                            <td>100 €</td>
                            <td class="stock" data-direction="Est">5</td>
                            <td>
                                <button type="button" class="minus" data-direction="Est">-</button>
                                <input type="text" readonly class="quantity" value="0"/>
                                <button type="button" class="plus" data-direction="Est">+</button>
                                
                                <p></p>
                                <button type="button" class="add-to-cart" data-direction="Est">Ajouter au panier</button>
                            </td>
                            <td><img src="https://cdn-icons-png.flaticon.com/512/17/17259.png" alt="Boussole vers Est" class="imgIll"\></td>
                        </tr>
                    </tbody>
                </table>
                
            </section>
            <section id="main1000km">
                <p></p>
                <h2>De 300 à 1000 km</h2>
                <table>
                    <thead>
                        <th>Direction</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th class="stock">Stock</th>
                        <th>Commande</th>
                        <th>Photo</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nord</td>
                            <td>On va vers le Nord</td>
                            <td>500 €</td>
                            <td class="stock" data-direction="Nord">15</td>
                            <td>
                                <button type="button" class="minus" data-direction="Nord">-</button>
                                <input type="text" readonly class="quantity" value="0"/>
                                <button type="button" class="plus" data-direction="Nord">+</button>
                                
                                <p></p>
                                <button type="button" class="add-to-cart" data-direction="Nord">Ajouter au panier</button>
                            </td>
                            <td><img src="https://cdn-icons-png.flaticon.com/512/16/16797.png" alt="Boussole vers le nord" class="imgIll"\></td>
                        </tr>
                        <tr>
                            <td>Ouest</td>
                            <td>On va vers le Ouest</td>
                            <td>500 €</td>
                            <td class="stock" data-direction="Ouest">5</td>
                            <td>
                                <button type="button" class="minus" data-direction="Ouest">-</button>
                                <input type="text" readonly class="quantity" value="0"/>
                                <button type="button" class="plus" data-direction="Ouest">+</button>
                                
                                <p></p>
                                <button type="button" class="add-to-cart" data-direction="Ouest">Ajouter au panier</button>
                            </td>
                            <td><img src="https://cdn-icons-png.flaticon.com/512/17/17276.png" alt="Boussole vers l'ouest" class="imgIll" \></td>
                        </tr>
                        <tr>
                            <td>Sud</td>
                            <td>On va vers le Sud</td>
                            <td>500 €</td>
                            <td class="stock" data-direction="Sud">5</td>
                            <td>
                                <button type="button" class="minus" data-direction="Sud">-</button>
                                <input type="text" readonly class="quantity" value="0"/>
                                <button type="button" class="plus" data-direction="Sud">+</button>
                                
                                <p></p>
                                <button type="button" class="add-to-cart" data-direction="Sud">Ajouter au panier</button>
                            </td>
                            <td><img src="https://cdn-icons-png.flaticon.com/512/16/16744.png" alt="Boussole vers le sud" class="imgIll" ></td>
                        </tr>
                            <td>Est</td>
                            <td>On va vers le Est</td>
                            <td>500 €</td>
                            <td class="stock" data-direction="Est">5</td>
                            <td>
                                <button type="button" class="minus" data-direction="Est">-</button>
                                <input type="text" readonly class="quantity" value="0"/>
                                <button type="button" class="plus" data-direction="Est">+</button>
                                
                                <p></p>
                                <button type="button" class="add-to-cart" data-direction="Est">Ajouter au panier</button>
                            </td>
                            <td><img src="https://cdn-icons-png.flaticon.com/512/17/17259.png" alt="Boussole vers Est" class="imgIll" \></td>
                        </tr>
                    </tbody>
                </table>
                
            </section>
            
            <button type="button" id="hideStocks" onclick="hideStock()">Cacher stock</button>
            <p></p>
        </section>
        <footer id="Footer">
            <?php include 'footer.php'; ?>
        </footer>
        <script type="text/javascript" src="../js/panier.js"></script>
    </body>
</html>