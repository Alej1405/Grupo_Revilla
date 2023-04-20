<div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">
                    Tracking
                </span>
                <input  type="text" 
                        class="form-control" 
                        placeholder="Una serie de numeros y letras 90002111 / 1Z022145" 
                        aria-label="Tracking" 
                        aria-describedby="Tracking"
                        name="tracking"
                        value="<?php echo s($cargas -> tracking);  ?>"
                        require>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">
                    En que tienda compraste...?
                </span>
                <input  type="text" 
                        class="form-control" 
                        placeholder="Puede ser Amazon, Ebay, Aliexpress" 
                        aria-label="origen" 
                        aria-describedby="origen"
                        value="<?php echo s($cargas -> origen);  ?>"
                        name="origen">
            </div>
            
            <label for="basic-url" class="form-label">Ahora cuentanos acerca de tu compra</label>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Que es lo que compraste...?</span>
                <input  type="text" 
                        class="form-control"
                        placeholder="ejemplo: 2 pares de zapatos, 5 camisetas, 5 perfumes"
                        id="detalle" 
                        aria-describedby="detalle"
                        name="detalle"
                        value="<?php echo s($cargas -> detalle);  ?>"
                        require>
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text">
                    Sabes cuanto pesa...?
                </span>
                <input  type="text"
                        placeholder="Sólo ingresa la cantidad, si no lo tienes no llenes"
                        class="form-control" 
                        aria-label="Amount (to the nearest dollar)"
                        value="<?php echo s($cargas -> peso);  ?>"
                        name="peso">
            </div>