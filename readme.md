## Parlamento Juvenil da ALERJ

### Comandos para popular o banco de dados vazio para testes

```
php artisan migrate
php artisan db:seed
php artisan pj:seeduc:test-data
php artisan pj:populate-cities
```

### Importar a base de dados do Seeduc
O arquivo deve estar em .csv UTF-8 e delimitado por ';' com as colunas:

#### Colunas do arquivo (devem estar na ordem)
```
ESCOLA
MUNICIPIO
REGIONAL
NOME
MATRICULA
NASCIMENTO (formato Y-m-d H:i:s.u)
```

#### Comandos
```
php artisan pj:seeduc <path_to_csv_file> --dont-truncate
php artisan pj:seeduc:schools <path_to_csv_file> --dont-truncate
php artisan pj:seeduc:test-data
```

#### Exemplo de arquivo
`parlamentojuvenil/storage/exemploSeeduc.csv`

### Fases

#### Inscrição

##### Variáveis no .env
```
SUBSCRIPTIONS_ENABLED=true
SUBSCRIPTIONS_START=yyyy-mm-dd
SUBSCRIPTIONS_END=yyyy-mm-dd
```

###Queries

####Escolas não cadastradas de alunos cadastrados
```
select count(*) from (select distinct escola from seeduc where escola not in (select name from schools) order by escola) as aux;
select distinct escola from seeduc where escola not in (select name from schools) order by escola;
```

####Alunos na idade de inscrição cujas escolas não estão cadastradas
```
select * from seeduc where escola in (select distinct escola from seeduc where escola not in (select name from schools)) and  nascimento >= '2002-11-28' and nascimento <= '2005-11-25';
```
```
select count(*) from seeduc where escola in (select distinct escola from seeduc where escola not in (select name from schools)) and  nascimento >= '2002-11-28' and nascimento <= '2005-11-25';
```

####Quantidade de escolas duplicadas(com o mesmo censo)
```
select count(*) from (select count(*), censo from schools group by censo) aux where aux.count>1;
```

### Votes per hour
```
SELECT 
    to_timestamp(floor((extract('epoch' from created_at) / 3600 )) * 3600) AT TIME ZONE 'UTC' as hora,
    (select count(*) from votes) as votos_total,
    COUNT(*) votos_na_hora, 
    CAST(round((COUNT(*)  * 100.00) / (select count(*) from votes), 2) AS text) || '%' as percentual
FROM votes
GROUP BY hora
ORDER BY hora desc
;
```