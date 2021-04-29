-- SELECT SUM(carne_arabe) arabe 
-- FROM base 
-- WHERE 
--  fechas BETWEEN '2020-06-01' AND '2021-12-31' 
-- AND categoria IN ('BEBIDAS','CALDOS','COMPLEMENTOS','ENTRADAS','ESPECIALIDADES','EXTRAS','KILO','PANTALLA DE INICIO','PROMO','TACOS')
-- 
-- 

-- SELECT dias, SUM(carne_arabe) arabe, SUM(carne_pastor) pastor, SUM(arrachera_marinada) arrachera, SUM(queso_gouda) gouda,
--                         SUM(cebollas_a_las_Brasas) cebollaBrasas, SUM(tortilla_taquera) tortilla_taquera, SUM(tortilla_de_harina) tortilla_de_harina,
--                         SUM(pan_arabe) pan_arabe, SUM(pan_hamburguesa) pan_hamburguesa, SUM(jitomate) jitomate, SUM(pepino) pepino, SUM(frijoles_charros) frijoles_charros,
--                         SUM(guacamole) guacamole, SUM(cebolla) cebolla, SUM(pimiento_morron) pimiento, SUM(tocino) tocino, SUM(tortilla_totopos) tortilla_totopos,
--                         SUM(pinia) pinia, SUM(cilantro) cilantro, SUM(aguacate) aguacate, SUM(jocoque) jocoque, SUM(champinion) champinion 
--                         FROM base 
--                         WHERE dias LIKE 'Lunes' 
--                         AND mes LIKE 'ABRIL' 
--                         AND anio LIKE '2021'
--                         AND categoria IN('CALDOS','COMPLEMENTOS','EMPAQUES','ENTRADAS','ESPECIALIDADES','EXTRAS','KILO','PROMO','TACOS')

-- SELECT dias, mes, fechas, producto, SUM(carne_arabe) carne_arabe
-- FROM base
-- WHERE dias = 'Lunes' AND mes = 'Abril' AND anio = 2021 AND carne_arabe != 0
-- -- AND producto IN('1 kg Árabe','1 kg Árabe (Queso Gouda)','1 kg Árabe UBER','1/2 kg Árabe','1/2 kg Árabe (Con queso)','Taco Arabe','Taco Árabe con queso','1 kg Árabe UBER')
-- GROUP BY dias AND carne_arabe
-- ORDER BY fechas AND producto DESC

SELECT SUM(carne_arabe)/COUNT(*) AS carne FROM base WHERE dias= 'Martes' AND mes = 'Abril' AND anio = 2021 
AND producto IN('1 kg Árabe','1 kg Árabe (Queso Gouda)','1 kg Árabe UBER','1/2 kg Árabe','1/2 kg Árabe (Con queso)','Taco Arabe','Taco Árabe con queso','1 kg Árabe UBER')