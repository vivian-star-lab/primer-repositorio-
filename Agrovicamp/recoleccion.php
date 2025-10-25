<?php 
include_once('componentes/cabecera.php')
?>
<style>
  /* =====================================================
     ESTILOS GENERALES DEL DOCUMENTO
  ===================================================== */
  body {
    background-color: #f4f7f6; /* color predominante */
    font-family: "Poppins", sans-serif;
    margin: 0;
    padding: 0;
  }

  /* =====================================================
     ESTILOS DEL DIV PRINCIPAL .recoleccion.section
  ===================================================== */
  div.recoleccion.section {
    max-width: 650px;               /* límite del ancho */
    background-color: #ffffff;      /* fondo blanco */
    margin: 50px auto;              /* centrado horizontal y margen vertical */
    padding: 40px;                  /* espacio interno */
    border-radius: 12px;            /* bordes redondeados */
    box-shadow: 0 4px 12px rgba(0,0,0,0.08); /* sombra ligera */
    border: 1px solid #e0e4e3;      /* línea suave para contraste */
  }

  /* Decoración superior verde */
  div.recoleccion.section::before {
    content: "";
    display: block;
    height: 6px;
    width: 100px;
    margin: 0 auto 25px;
    background: linear-gradient(90deg, #6bb48d, #4e8b6e);
    border-radius: 3px;
  }

  /* Título dentro del div */
  div.recoleccion.section h2 {
    text-align: center;
    color: #2d5a4b;
    margin-bottom: 25px;
    font-weight: 600;
    letter-spacing: 0.5px;
  }

  /* =====================================================
     ESTILOS DEL FORMULARIO DENTRO DEL DIV
  ===================================================== */
  div.recoleccion.section form {
    display: flex;
    flex-direction: column;
    gap: 10px; /* espacio entre los campos */
  }

  /* =====================================================
     ETIQUETAS DEL FORMULARIO
  ===================================================== */
  div.recoleccion.section form label {
    margin-top: 10px;
    font-size: 15px;
    color: #333;
    font-weight: 500;
  }

  /* =====================================================
     CAMPOS DE ENTRADA (input, select, textarea)
  ===================================================== */
  div.recoleccion.section form input[type="text"],
  div.recoleccion.section form input[type="date"],
  div.recoleccion.section form input[type="number"],
  div.recoleccion.section form select,
  div.recoleccion.section form textarea {
    padding: 10px 12px;
    border: 1px solid #ccd1cf;
    border-radius: 6px;
    font-size: 15px;
    background-color: #f9faf9;
    color: #333;
    transition: all 0.2s ease-in-out;
  }

  /* Estado de foco */
  div.recoleccion.section form input:focus,
  div.recoleccion.section form select:focus,
  div.recoleccion.section form textarea:focus {
    outline: none;
    border-color: #6bb48d;
    box-shadow: 0 0 5px rgba(107,180,141,0.4);
  }

  /* =====================================================
     ÁREA DE TEXTO (textarea)
  ===================================================== */
  div.recoleccion.section form textarea {
    resize: vertical;
    min-height: 90px;
  }

  /* =====================================================
     BOTÓN DE ENVÍO
  ===================================================== */
  div.recoleccion.section form input[type="submit"] {
    background-color: #6bb48d;
    color: #fff;
    border: none;
    margin-top: 20px;
    padding: 12px;
    border-radius: 6px;
    font-weight: 600;
    font-size: 15px;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.1s ease;
  }

  /* Efecto hover en el botón */
  div.recoleccion.section form input[type="submit"]:hover {
    background-color: #579c78;
    transform: scale(1.02);
  }

  /* =====================================================
     RESPONSIVIDAD (PANTALLAS PEQUEÑAS)
  ===================================================== */
  @media (max-width: 600px) {
    div.recoleccion.section {
      padding: 25px;
    }

    div.recoleccion.section h2 {
      font-size: 18px;
    }

    div.recoleccion.section form input,
    div.recoleccion.section form select,
    div.recoleccion.section form textarea {
      font-size: 14px;
    }
  }
</style>

<div class="recoleccion section">
  <h2>🗑️ Recolección de Residuos Agroindustriales</h2>

  <form action="validacion/guardar_recoleccion.php" method="POST">
    
    <label for="fecha">Fecha de Recolección</label>
    <input type="date" name="fecha" id="fecha" required>
    
    <label for="origen">Finca / Origen</label>
    <input type="text" name="origen" id="origen" placeholder="Nombre de la finca o productor" required>
    
    <label for="tipo_materia">Tipo de Materia Recolectada</label>
    <select name="tipo_materia" id="tipo_materia" required>
      <option value="">-- Selecciona --</option>
      <option value="estiércol">Estiércol (vacas, cerdos, pollos)</option>
      <option value="subproductos_animales">Subproductos animales (leche, plumas, huevos)</option>
      <option value="residuos_vegetales">Residuos vegetales (tallos, hojas, cáscaras)</option>
      <option value="frutas_dañadas">Frutas y verduras no comercializables</option>
      <option value="bioabono">Bioabonos y compost</option>
      <option value="envases_fertilizantes">Envases de fertilizantes y pesticidas</option>
      <option value="plásticos_agricolas">Plásticos agrícolas</option>
      <option value="mezcla_organica">Mezcla orgánica para compost/biodigestor</option>
    </select>
    
    <label for="cantidad">Cantidad Recolectada (kg o Ton)</label>
    <input type="number" step="0.01" name="cantidad" id="cantidad" placeholder="Ej: 12.5" required>
    
    <label for="estado">Estado de la Materia</label>
    <select name="estado" id="estado" required>
      <option value="">-- Selecciona --</option>
      <option value="fresco">Fresco</option>
      <option value="seco">Seco</option>
      <option value="mojado">Mojado/Húmedo</option>
      <option value="mezclado">Mezclado</option>
    </select>
    
    <label for="transporte">Transporte Utilizado</label>
    <input type="text" name="transporte" id="transporte" placeholder="Ej: Camión, carreta, moto">
    
    <label for="observaciones">Observaciones</label>
    <textarea name="observaciones" id="observaciones" rows="3" placeholder="Comentarios adicionales..."></textarea>
    
    <input type="submit" value="Registrar Recolección">
  </form>
</div>

<?php 
include_once('componentes/footer.php')
?>