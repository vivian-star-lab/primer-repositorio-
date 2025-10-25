<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AgroTrace Dashboard</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
<style>
  /* ===== BASE ===== */
  * { margin:0; padding:0; box-sizing:border-box; font-family:'Inter', sans-serif; }
  body { background:#f4f7f6; color:#333; min-height:100vh; display:flex; }

  /* ===== SIDEBAR MODERNO ===== */
  .sidebar {
    width:220px;
    background:#1e3a2f;
    color:#fff;
    display:flex;
    flex-direction:column;
    justify-content:space-between;
    padding:20px;
    height:100vh;
    position:fixed;
  }
  .sidebar h2 { text-align:center; margin-bottom:30px; font-weight:700; }
  .menu a {
    display:block;
    padding:12px 15px;
    border-radius:8px;
    margin-bottom:8px;
    color:#cde0cd;
    text-decoration:none;
    font-weight:500;
    transition:all 0.3s;
  }
  .menu a:hover { background:#2c6048; color:#fff; }

  /* ===== CONTENIDO PRINCIPAL ===== */
  .main-content { margin-left:220px; padding:20px; flex:1; display:flex; flex-direction:column; gap:20px; }

  .header { display:flex; justify-content:space-between; align-items:center; }
  .header h1 { font-weight:700; font-size:1.8rem; color:#1e3a2f; }

  /* ===== TARJETAS KPI ===== */
  .cards {
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:20px;
  }
  .card {
    background:#fff;
    border-radius:16px;
    padding:20px;
    box-shadow:0 6px 18px rgba(0,0,0,0.08);
    transition:transform 0.3s, box-shadow 0.3s;
  }
  .card:hover { transform:translateY(-6px); box-shadow:0 12px 20px rgba(0,0,0,0.12); }
  .card h3 { color:#1e3a2f; margin-bottom:12px; font-weight:600; }
  .card p { font-size:1.5rem; font-weight:700; color:#2e7d32; }

  /* ===== SECCIONES ===== */
  .section {
    background:#fff;
    border-radius:16px;
    padding:25px;
    box-shadow:0 6px 18px rgba(0,0,0,0.08);
  }
  .section h2 { font-size:1.3rem; color:#1e3a2f; margin-bottom:15px; font-weight:600; }
  .chart {
    background:#f0f7f2;
    height:180px;
    border-radius:12px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:0.95rem;
    color:#777;
    border:1px dashed #cde0cd;
  }

  /* ===== RESPONSIVE ===== */
  @media (max-width:900px){
    body { flex-direction:column; }
    .sidebar { position:relative; width:100%; height:auto; flex-direction:row; padding:10px 20px; overflow-x:auto; }
    .menu { display:flex; gap:10px; }
    .main-content { margin-left:0; }
    .cards { grid-template-columns:1fr; }
  }

</style>
</head>
<body>

  <!-- ===== SIDEBAR ===== -->
  <div class="sidebar">
    <h2>🌱 AgroTrace</h2>
    <div class="menu">
      <a href="#">🏠 Resumen</a>
      <a href="#">🌾 Recolección</a>
      <a href="#">🏭 Transformación</a>
      <a href="#">🚛 Distribución</a>
      <a href="#">📈 Predicción</a>
      <a href="#">🔗 Trazabilidad</a>
      <a href="#">🌍 Impacto</a>
    </div>
  </div>

  <!-- ===== CONTENIDO PRINCIPAL ===== -->
  <div class="main-content">
    <div class="header">
      <h1>Panel de Control - Agrovicamp</h1>
      <p>📅 Octubre 2025</p>
    </div>

  
