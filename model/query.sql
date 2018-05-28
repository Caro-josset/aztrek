USE ecolidaire;

SELECT 
	project.id,
    project.title,
    project.picture,
    date_format(project.date_start, '%d/%m/%Y') AS date_start,
    category.label AS category,
    COUNT(DISTINCT(project_has_member.member_id)) AS nb_member,
    AVG(notation.grade) AS grade
FROM project
INNER JOIN category ON project.category_id = category.id
LEFT JOIN project_has_member ON project_has_member.project_id = project.id
LEFT JOIN notation ON notation.project_id = project.id
GROUP BY project.id 
ORDER BY project.date_start DESC
LIMIT 3;

SELECT 
	project.*,
    date_format(project.date_start, '%e/%m/%Y') AS date_start_format,
    datediff(project.date_end, project.date_start) AS days,
    category.label AS category
FROM project
INNER JOIN category ON category.id = project.category_id
WHERE project.id = 2; 
