@extends('layouts.app')
@section('title')
  Create Task
@endsection

@section('script')

@endsection


@section('js')

@endsection



@section('content')
    <div class="container">
        <h1 class="font-weight-bold text-3xl">수용가 정보 수정</h1>
        <form class="form-horizontal" role="form" method="post" action="/tasks/{{ $task->id }}">   
        <!-- <form class="form-horizontal" role="form" method="post" action="javascript:alert( 'success!' );"> -->
            @method('PUT')
            @csrf
<!--
        <div class="form-group">
                <label for="provision" class="col-lg-2 control-label">회원가입약관</label>
                <div class="col-lg-10" id="provision">
                    <textarea class="form-control" rows="8" style="resize:none">약관동의</textarea>
                    <div class="radio">
                        <label>
                            <input type="radio" id="provisionYn" name="provisionYn" value="Y" autofocus="autofocus" checked>
                            동의합니다.
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" id="provisionYn" name="provisionYn" value="N">
                            동의하지 않습니다.
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="memberInfo" class="col-lg-2 control-label">개인정보취급방침</label>
                <div class="col-lg-10" id="memberInfo">
                    <textarea class="form-control" rows="8" style="resize:none">개인정보의 항목 및 수집방법</textarea>
                    <div class="radio">
                        <label>
                            <input type="radio" id="memberInfoYn" name="memberInfoYn" value="Y" checked>
                            동의합니다.
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" id="memberInfoYn" name="memberInfoYn" value="N">
                            동의하지 않습니다.
                        </label>
                    </div>
                </div>
            </div>
-->

            <div class="form-group" id="divProjectName" >
            <!--<div class="form-group" id="divProjectName" style="display:flex;"> -->
                <label for="inputProjectName" class="col-lg-2">Project Name</label>
                <!-- <label for="inputProjectName" class="col-lg-2 control-label">Project Name</label> -->
                <div class="col-lg-10">
                    <input type="text" class="form-control onlyAlphabetAndNumber @error('projectname') border border-danger @enderror " 
                    required value="{{ old('projectname') ? old('projectname') : $task->projectname }}" id="projectname" name="projectname" 
                    data-rule-required="true" placeholder="Project Name" maxlength="">
                    @error('projectname')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>            
            <div class="form-group" id="divProjectId">
                <label for="inputprojectId" class="col-lg-2 control-label">Project ID</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control onlyAlphabetAndNumber @error('projectid') border border-danger @enderror" 
                    required value=" {{ old('projecid') ? old('projecid') : $task->projectid }} " id="projectid" name="projectid" 
                    data-rule-required="true" placeholder="Project ID" maxlength="">
                    @error('projectid')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group" id="divCustomerName">
                <label for="inputCustomerName" class="col-lg-2 control-label">고객명</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control @error('customername') border border-danger @enderror" 
                    required value=" {{ old('customername') ? old('customername') : $task->customername  }} " id="customername" 
                    name="customername" data-rule-required="true" placeholder="고객명" maxlength="30">
                    @error('customername')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group" id="divCustomerContact">
                <label for="inputCustomerContact" class="col-lg-2 control-label">고객 연락처</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control @error('customercontact') border border-danger @enderror" 
                    required value=" {{ old('customercontact') ? old('customercontact') : $task->customercontact }} " 
                    id="customercontact" name="customercontact" data-rule-required="true" placeholder="고객 연락처" maxlength="30">
                    @error('customercontact')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group" id="divCustomerPhone">
                <label for="inputCustomerPhone" class="col-lg-2 control-label">고객 번호</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control onlyHangul @error('customerphone') border border-danger @enderror" required value=" {{ old('customerphone') ? old('customerphone') : $task->customerphone  }} " id="customerphone" name="customerphone" data-rule-required="true" placeholder="고객 번호" maxlength="15">
                    @error('customerphone')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="inputProvince" class="col-lg-2 control-label">주소(시도)</label>
                <div class="col-lg-10">
                    <select class="form-control @error('address1') border border-danger @enderror"  id="address1" name="address1">
                        <option value="서울시">서울시</option>
                        <option value="경기도">경기도</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputProvince" class="col-lg-2 control-label">주소(시군구)</label>
                <div class="col-lg-10">
                    <select class="form-control @error('address2') border border-danger @enderror" id="address2" name="address2">
                        <option value="종로구">종로구</option>
                        <option value="서대문구">서대문구</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputProvince" class="col-lg-2 control-label">주소(읍면동))</label>
                <div class="col-lg-10 ">
                    <select class="form-control @error('address3') border border-danger @enderror " id="address3" name="address3">
                        <option value="청진동">청진동</option>
                        <option value="인사동">인사동</option>
                    </select>
                </div>
            </div>
            <div class="form-group" id="divKepcoID">
                <label for="inputKepcoID" class="col-lg-2 control-label">한전 ID</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control @error('kepcoid') border border-danger @enderror" required 
                    value=" {{ old('kepcoid') ? old('kepcoid') : $task->kepcoid }} " id="kepcoid" name="kepcoid" data-rule-required="true" placeholder="한국 전력에서 제공하는 고객번호" maxlength="15">
                    @error('kepcoid')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group" id="divBusinessModel">
                <label for="inputBusinessModel" class="col-lg-2 control-label">해당 사업 형태</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control @error('businessmodel') border border-danger @enderror" required 
                    value=" {{ old('businessmodel') ? old('businessmodel') : $task->businessmodel  }} " id="businessmodel" name="businessmodel" data-rule-required="true" placeholder="사업 유형에 따른 분류" maxlength="15">
                    @error('businessmodel')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group" id="divBuilding">
                <label for="inputBuilding" class="col-lg-2 control-label">건물 형태</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" required value=" {{ old('building') ? old('building') : $task->building }} " id="building" name="building" data-rule-required="true" placeholder="건축물 상부에 설치될 경우" maxlength="15">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-primary text-white" value="submit" >Submit</button>
                </div>
            </div>
        
        </form>
</div>

@endsection