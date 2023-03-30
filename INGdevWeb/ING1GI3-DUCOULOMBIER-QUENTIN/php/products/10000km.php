<?php
echo '
<section id="main10000km">
    <p></p>
    <h2>De 5 000 à 10 000 km</h2>
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
                <td>900 €</td>
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
                <td>900 €</td>
                <td class="stock" data-direction="Ouest">7</td>
                <td>
                    <button type="button" class="minus" data-direction="Ouest">-</button>
                    <input type="text" readonly class="quantity" value="0"/>
                    <button type="button" class="plus" data-direction="Ouest">+</button>
                    
                    <p></p>
                    <button type="button" class="add-to-cart" data-direction="Ouest">Ajouter au panier</button>
                </td>
                <td><img src="https://cdn-icons-png.flaticon.com/512/17/17276.png" alt="Boussole vers louest" class="imgIll" \></td>
            </tr>
            <tr>
                <td>Sud</td>
                <td>On va vers le Sud</td>
                <td>900 €</td>
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
                <td>900 €</td>
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
';


?>