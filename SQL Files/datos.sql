INSERT INTO `Nosotros` (`id`, `Vision`, `Mision`) VALUES
(1, 'Ser líderes en desarrollo tecnológico', 'Proveer soluciones innovadoras'),
(2, 'Expandir servicios globalmente', 'Facilitar la conectividad en todo el mundo'),
(3, 'Impulsar la transformación digital', 'Ayudar a las empresas a crecer con tecnología');

INSERT INTO `Servicios` (`id`, `Nombre`, `Costo`, `Duracion`, `Tipo`) VALUES
(1, 'Desarrollo Web', 5000, 30, 1),
(2, 'Consultoría IT', 3000, 15, 2),
(3, 'Mantenimiento de Redes', 2000, 10, 3),
(4, 'Desarrollo de Apps', 7000, 45, 1),
(5, 'Soporte Técnico', 1500, 5, 3),
(6, 'Auditoría de Seguridad', 4000, 20, 2),
(7, 'Migración a la Nube', 6000, 25, 1),
(8, 'Optimización de Bases de Datos', 3500, 18, 2),
(9, 'Capacitación en TI', 2500, 12, 3),
(10, 'Desarrollo de APIs', 4500, 22, 1),
(11, 'Análisis de Datos', 5500, 28, 2),
(12, 'Implementación de ERP', 8000, 50, 1),
(13, 'Consultoría en DevOps', 5000, 30, 2),
(14, 'Automatización de Procesos', 6000, 35, 1),
(15, 'Soporte en Telecomunicaciones', 3000, 15, 3);

INSERT INTO `Ciudades` (`id`, `Nombre`) VALUES
(1, 'Ciudad de México'),
(2, 'Monterrey'),
(3, 'Guadalajara'),
(4, 'Tijuana'),
(5, 'Puebla'),
(6, 'Cancún'),
(7, 'Querétaro'),
(8, 'León'),
(9, 'Mérida'),
(10, 'Chihuahua'),
(11, 'Toluca'),
(12, 'San Luis Potosí'),
(13, 'Aguascalientes'),
(14, 'Hermosillo'),
(15, 'Culiacán');

INSERT INTO `ServiciosCiudades` (`id`, `idServicio`, `idCiudad`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 9, 9),
(10, 10, 10),
(11, 11, 11),
(12, 12, 12),
(13, 13, 13),
(14, 14, 14),
(15, 15, 15);