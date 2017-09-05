import os

c=input('controller:')
m=input('model:')
t=input('table:')

os.system('php artisan make:controller {}/{}Controller --resource --model=Models/{}'.format(c,c,m))
os.system('php artisan make:migration create_{}_table --create={}'.format(t,t))
os.system('php artisan make:test {}Test --unit'.format(c))
os.system('php artisan make:test {}Test'.format(c))
os.system('php artisan make:seeder {}Seeder'.format(m))
os.system('php artisan migrate:fresh --seed')