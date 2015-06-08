@extends('backend/default')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					Whatsapp Reminders
				</div>
				<table class="table table-striped table-hover">
					<tr class="info">
						<td>Comment</td>
						<td>Phone</td>
						<td>Message</td>
						<td></td>
					</tr>
					@for ($i=0;$i<4;$i++)
						<tr>
							<td>
								<textarea class="form-control" rows="3">This is a random comment</textarea>
							</td>
							<td>
								+852 9107-4337
							</td>
							<td>
								GoTarot電話塔羅占卜服務付款提示: <BR>jennifer 你好，由於我們並沒有找到你的付款項目，請閣下盡快繳交
							</td>
							<td>
								<a href="#" class="btn btn-primary">Whatsapp got sent</a>
							</td>
						</tr>
					@endfor
				</table>
			</div>


		</div>
	</div>
</div>
@stop