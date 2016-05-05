@servers(['web' => '10.2.4.112'])

@task('foo', ['on' => 'web'])
    ls -la
@endtask
       
