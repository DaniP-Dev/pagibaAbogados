<!-- Banner Leaderboard de Cuenta Regresiva -->
<style>
.banner-leaderboard {
    width: 100vw;
    left: 50%;
    transform: translateX(-50%);
    background: linear-gradient(90deg, #ff9800 0%, #ff5722 100%);
    color: #fff;
    text-align: center;
    padding: 20px 10px;
    font-family: 'Segoe UI', Arial, sans-serif;
    font-size: 1.5rem;
    position: relative;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    z-index: 100;
}
.banner-leaderboard .timer {
    font-weight: bold;
    font-size: 2rem;
    margin: 0 10px;
    letter-spacing: 2px;
}
.banner-leaderboard .cta-btn {
    background: #fff;
    color: #ff5722;
    border: none;
    padding: 10px 24px;
    border-radius: 4px;
    font-size: 1.1rem;
    font-weight: bold;
    cursor: pointer;
    margin-left: 20px;
    transition: background 0.2s, color 0.2s;
}
.banner-leaderboard .cta-btn:hover {
    background: #ff5722;
    color: #fff;
}
</style>
<div class="banner-leaderboard">
    ¡Oferta especial! Compra antes de que termine el tiempo:
    <span class="timer" id="cuentaRegresiva"></span>
    <button class="cta-btn" onclick="window.location.href='/comprar'">¡Comprar ahora!</button>
</div>
<script>
// Configura la cuenta regresiva (ejemplo: 15 minutos desde la carga)
const minutos = 15;
const fechaLimite = new Date(Date.now() + minutos * 60 * 1000);

function actualizarCuentaRegresiva() {
    const ahora = new Date();
    const diferencia = fechaLimite - ahora;
    if (diferencia <= 0) {
        document.getElementById('cuentaRegresiva').textContent = '00:00:00';
        return;
    }
    const horas = Math.floor(diferencia / (1000 * 60 * 60));
    const mins = Math.floor((diferencia % (1000 * 60 * 60)) / (1000 * 60));
    const segs = Math.floor((diferencia % (1000 * 60)) / 1000);
    document.getElementById('cuentaRegresiva').textContent =
        `${String(horas).padStart(2, '0')}:${String(mins).padStart(2, '0')}:${String(segs).padStart(2, '0')}`;
}
actualizarCuentaRegresiva();
setInterval(actualizarCuentaRegresiva, 1000);
</script>

