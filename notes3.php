SELECT equipment.id, equipment.type_name, equipment.equipment_no,
equipment.manufacture_year, equipement.seriel_no, equipment.remark,
equipment_type.company_name FROM equipment FULL OUTER JOIN
equipment_type ON equipment.type_name=equipment_type.type_name
ORDER BY equipment_no ASC

SELECT id, type_name, equipment_no, manufacture_year, seriel_no,
remark, company_name FROM equipment FULL OUTER JOIN equipment_type
ON equipment.type_name=equipment_type.type_name ORDER BY
equipment_no ASC
