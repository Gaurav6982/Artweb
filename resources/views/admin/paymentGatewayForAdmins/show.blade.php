@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.paymentGatewayForAdmin.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.payment-gateway-for-admins.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentGatewayForAdmin.fields.id') }}
                        </th>
                        <td>
                            {{ $paymentGatewayForAdmin->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentGatewayForAdmin.fields.name') }}
                        </th>
                        <td>
                            {{ $paymentGatewayForAdmin->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentGatewayForAdmin.fields.image') }}
                        </th>
                        <td>
                            @if($paymentGatewayForAdmin->image)
                                <a href="{{ $paymentGatewayForAdmin->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $paymentGatewayForAdmin->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentGatewayForAdmin.fields.creditinals_title') }}
                        </th>
                        <td>
                            {{ $paymentGatewayForAdmin->creditinals_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentGatewayForAdmin.fields.creditinals_value') }}
                        </th>
                        <td>
                            {{ $paymentGatewayForAdmin->creditinals_value }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentGatewayForAdmin.fields.description') }}
                        </th>
                        <td>
                            {!! $paymentGatewayForAdmin->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.paymentGatewayForAdmin.fields.mode') }}
                        </th>
                        <td>
                            {{ App\Models\PaymentGatewayForAdmin::MODE_SELECT[$paymentGatewayForAdmin->mode] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.payment-gateway-for-admins.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection