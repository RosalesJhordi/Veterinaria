import { driver } from "driver.js";
import "driver.js/dist/driver.css";

// Verificar si el tour ya se ha mostrado
if (!localStorage.getItem('tourShown')) {
  const driverObj = driver({
    nextBtnText: '➡',
    prevBtnText: '⬅',
    doneBtnText: '❌',
    showProgress: true,
    steps: [
      { element: '#sesion', popover: { title: 'sesion', description: 'Puedes crear una cuenta o iniciar sesión aquí' } }
    ]
  });

  // Mostrar el tour
  driverObj.drive();

  // Marcar que el tour ya se ha mostrado
  localStorage.setItem('tourShown', 'true');
}
