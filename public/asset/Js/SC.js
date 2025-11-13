function ajustarSVGResponsivo() {
  const svgs = document.querySelectorAll(".SC-line-1, .SC-line-2");
  const ancho = window.innerWidth;

  svgs.forEach(svg => {
    if (!svg) return;

    if (ancho < 768) {
      // 📱 En móviles: ajustar para que no se salga del margen
      svg.setAttribute("preserveAspectRatio", "none");
      svg.style.width = "67%";
      svg.style.overflow = "hidden";
    } else {
      // 💻 En pantallas grandes: restaurar comportamiento original
      svg.setAttribute("preserveAspectRatio", "xMidYMid meet");
      svg.style.width = "";
      svg.style.overflow = "";
    }
  });
}

// Ejecutar al cargar y al redimensionar
ajustarSVGResponsivo();
window.addEventListener("resize", ajustarSVGResponsivo);


document.addEventListener("DOMContentLoaded", () => {
  const infoFichas = {
    1: {
      title: "Organízate con tus vecinos",
      text: `<p><strong>Por qué es importante:</strong> Un vecindario unido puede detectar problemas más rápido y actuar coordinadamente ante incidentes.</p> 
                   <p><strong>Cómo implementarlo:</strong></p>
                   <ul>
                     <li>Crear grupos de comunicación digital (WhatsApp, Telegram) para alertas.</li> 
                     <li>Establecer “vigías” por zonas o calles.</li> 
                     <li>Coordinar reuniones periódicas para discutir seguridad y mejoras.</li> 
                   </ul>`,
      img: BASE_URL + "/asset/img/SC-img-5.jpg",
    },
    2: {
      title: "Mantén iluminadas calles y entradas",
      text: `<p><strong>Por qué es importante:</strong> La oscuridad facilita la comisión de delitos. Un área bien iluminada disuade a delincuentes.</p> 
                   <p><strong>Cómo implementarlo:</strong></p>
                   <ul>
                     <li>Instalar luces LED en entradas, portones y pasillos comunes.</li> 
                     <li>Usar temporizadores o sensores de movimiento para que las luces se enciendan automáticamente.</li> 
                     <li>Mantener lámparas y faroles en buen estado y reemplazar focos quemados rápidamente.</li> 
                   </ul>`,
      img: BASE_URL + "/asset/img/SC-img-6.jpg",
    },
    3: {
      title: "Reporta personas o vehículos sospechosos",
      text: `<p><strong>Por qué es importante:</strong> Detectar comportamientos inusuales ayuda a prevenir delitos.</p> 
                   <p><strong>Cómo implementarlo:</strong></p>
                   <ul>
                     <li>Anotar descripción de personas o placas de vehículos.</li> 
                     <li>No confrontar directamente; primero reportar a autoridades.</li> 
                     <li>Compartir la información con vecinos para que estén alerta.</li> 
                   </ul>`,
      img: BASE_URL + "/asset/img/SC-img-7.jpg",
    },
    4: {
      title: "Asegura puertas, ventanas y accesos",
      text: `<p><strong>Por qué es importante:</strong> La mayoría de robos ocurre por entradas mal aseguradas.</p> 
                   <p><strong>Cómo implementarlo:</strong></p>
                   <ul>
                     <li>Usar cerraduras de buena calidad y pestillos adicionales.</li> 
                     <li>Instalar rejas o mallas en ventanas accesibles.</li> 
                     <li>Revisar periódicamente que puertas, portones y candados estén funcionando correctamente.</li> 
                   </ul>`,
      img: BASE_URL + "/asset/img/SC-img-8.jpg",
    },
    5: {
      title: "Conoce a tus vecinos",
      text: `<p><strong>Por qué es importante:</strong> Conocer a quienes viven cerca permite identificar rápidamente a extraños y crea una comunidad más segura.</p> 
                   <p><strong>Cómo implementarlo:</strong></p>
                   <ul>
                     <li>Presentarte a los vecinos nuevos y compartir información de contacto.</li> 
                     <li>Organizar reuniones vecinales o actividades comunitarias.</li> 
                     <li>Fomentar confianza para que todos puedan alertar sobre situaciones sospechosas.</li> 
                   </ul>`,
      img: BASE_URL + "/asset/img/SC-img-9.png",
    },
    6: {
      title: "No compartas tu rutina en redes sociales",
      text: `<p><strong>Por qué es importante:</strong> Los delincuentes pueden usar información de redes sociales para planear robos o seguir hábitos de las personas.</p> 
                   <p><strong>Cómo implementarlo:</strong></p>
                   <ul>
                     <li>Evitar publicar horarios, vacaciones o ausencia prolongada.</li> 
                     <li>Revisar configuraciones de privacidad y limitar la visibilidad de publicaciones.</li> 
                     <li>Evitar etiquetar la ubicación en tiempo real.</li> 
                   </ul>`,
      img: BASE_URL + "/asset/img/SC-img-10.jpg",
    },
    7: {
      title: "Participa en simulacros y talleres",
      text: `<p><strong>Por qué es importante:</strong> Saber cómo actuar en emergencias reduce riesgos y mejora la respuesta de toda la comunidad.</p> 
                   <p><strong>Cómo implementarlo:</strong></p>
                   <ul>
                     <li>Asistir a talleres de prevención de delitos, incendios y primeros auxilios.</li> 
                     <li>Practicar simulacros de evacuación periódicamente.</li> 
                     <li>Enseñar a niños y adultos sobre rutas de escape y puntos de encuentro seguros.</li> 
                   </ul>`,
      img: BASE_URL + "/asset/img/SC-img-11.jpg",
    },
    8: {
      title: "Ten visibles los números de emergencia",
      text: `<p><strong>Por qué es importante:</strong> En situaciones críticas, cada segundo cuenta.</p> 
                   <p><strong>Cómo implementarlo:</strong></p>
                   <ul>
                     <li>Colocar números de policía, bomberos y hospitales en lugares visibles como puertas, refrigeradores o portales digitales vecinales.</li> 
                     <li>Asegurarse de que todos los miembros del hogar conozcan estos números.</li> 
                     <li>Mantener contactos de vecinos confiables para ayuda inmediata.</li> 
                   </ul>`,
      img: BASE_URL + "/asset/img/SC-img-12.jpg",
    },
    9: {
      title: "Evita dejar objetos de valor a la vista",
      text: `<p><strong>Por qué es importante:</strong> Objetos visibles atraen a delincuentes y aumentan el riesgo de robo.</p> 
                   <p><strong>Cómo implementarlo:</strong></p>
                   <ul>
                     <li>Guardar electrónicos, dinero y joyas fuera de ventanas y patios.</li> 
                     <li>Usar cortinas o persianas para impedir que se vea el interior.</li> 
                     <li>No dejar herramientas o llaves a la vista en el exterior.</li> 
                   </ul>`,
      img: BASE_URL + "/asset/img/SC-img-13.jpg",
    },
    10: {
      title: "Denuncia cualquier situación sospechosa",
      text: `<p><strong>Por qué es importante:</strong> La denuncia oportuna permite que las autoridades actúen antes de que ocurra un delito.</p> 
                   <p><strong>Cómo implementarlo:</strong></p>
                   <ul>
                     <li>Reportar hechos a la policía local o al grupo vecinal.</li> 
                     <li>Registrar detalles importantes: hora, lugar, descripción de personas o vehículos.</li> 
                     <li>Mantener un historial de incidentes para identificar patrones y riesgos frecuentes.</li> 
                   </ul>`,
      img: BASE_URL + "/asset/img/SC-img-14.jpg",
    },
  };

  const modal = document.getElementById("SC-modal");
  const modalTitle = document.getElementById("SC-modal-title");
  const modalText = document.getElementById("SC-modal-text");
  const modalImg = document.getElementById("SC-modal-img");
  const closeBtn = document.querySelector(".SC-close");

   // --- Abre el modal al hacer clic en imagen (versión escritorio) ---
  document.querySelectorAll(".SC-img-5").forEach((img) => {
    img.addEventListener("click", () => {
      const id = img.dataset.id;
      const info = infoFichas[id];
      if (info) {
        modalTitle.textContent = info.title;
        modalText.innerHTML = info.text;
        modalImg.src = info.img || "";
        modal.style.display = "flex";
      }
    });
  });

  closeBtn.onclick = () => (modal.style.display = "none");
  window.onclick = (e) => {
    if (e.target === modal) modal.style.display = "none";
  };

  // --- 💡 NUEVO BLOQUE: Solo para pantallas pequeñas ---
  if (window.matchMedia("(max-width: 375px)").matches) {
    document.querySelectorAll(
      ".SC-p-5, .SC-p-6, .SC-p-7, .SC-p-8, .SC-p-9, .SC-p-10, .SC-p-11, .SC-p-12, .SC-p-13, .SC-p-14"
    ).forEach((p, index) => {
      p.addEventListener("click", () => {
        const id = index + 1;
        const info = infoFichas[id];
        if (info) {
          modalTitle.textContent = info.title;
          modalText.innerHTML = info.text;
          modalImg.src = info.img || "";
          modal.style.display = "flex";
        }
      });
    });
  }
});

