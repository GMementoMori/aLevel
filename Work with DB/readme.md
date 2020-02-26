(3DUMP)Команда которая выведет все устройста и их производителей:

select 
    model as PRODUCTS,company as Company
    from phones 
inner join 
    companies 
    on(companies.id = phones.id_company) 
union 
select 
    model,company 
    from noutebooks 
inner join 
    companies 
    on(companies.id = noutebooks.id_company);

