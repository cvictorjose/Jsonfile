<html>
	<head>
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Laravel 5</div>
				<div>

					<form>
						<table>
							<tr>
								<th>First name</th>
								<th>Last name</th>
							</tr>
							<tr>
								<td><input type="text" name="people[][firstname]" value="Jeff" /></td>
								<td><input type="text" name="people[][surname]" value="Stelling" /></td>
							</tr>
							<tr>
								<td><input type="text" name="people[][firstname]" value="Chris" /></td>
								<td><input type="text" name="people[][surname]" value="Kamara" /></td>
							</tr>
							<tr>
								<td><input type="text" name="people[][firstname]" value="Alex" /></td>
								<td><input type="text" name="people[][surname]" value="Hammond" /></td>
							</tr>
							<tr>
								<td><input type="text" name="people[][firstname]" value="Jim" /></td>
								<td><input type="text" name="people[][surname]" value="White" /></td>
							</tr>
							<tr>
								<td><input type="text" name="people[][firstname]" value="Natalie" /></td>
								<td><input type="text" name="people[][surname]" value="Sawyer" /></td>
							</tr>
						</table>
						<input type="submit" value="OK" />
					</form>

				</div>
			</div>
		</div>
	</body>
</html>
