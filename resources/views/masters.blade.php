<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	@foreach ($results as $master) 
    	{{ $master->name}}
    	@foreach ($master->services  as $service) 
    		{{ $service->service_name }}
    			
    	@endforeach
    @endforeach
</body>
</html>