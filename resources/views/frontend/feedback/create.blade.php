@extends('frontend.main_master')
@section('content')
    <section class="formPageSection innerSectionGap">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Submit Feedback') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('category.store') }} ">
                                @csrf
                                <div class="mb-3">
                                    <label for="title" class="form-label">{{ __('Title') }}</label>
                                    <input type="text" class="form-control" id="title" name="title" >
                                </div>
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                               @enderror
                                <div class="mb-3">
                                    <label for="category" class="form-label">{{ __('Category') }}</label>
                                    <select class="form-select" id="category" name="category" >
                                        <option value="">Select Category</option>
                                        <option value="bug">Bug Report</option>
                                        <option value="feature">Feature Request</option>
                                        <option value="improvement">Improvement</option>
                                        <option value="usability">Usability</option>
                                        <option value="performance">Performance</option>
                                        <option value="security">Security</option>
                                        <option value="design">Design</option>
                                        <option value="content">Content</option>
                                        <option value="compatibility">Compatibility</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                @error('category')
                                <span class="text-danger">{{ $message }}</span>
                               @enderror

                                <div class="mb-3">
                                    <label for="description" class="form-label">{{ __('Description') }}</label>
                                    <textarea class="form-control" id="description" name="description" rows="5" ></textarea>
                                </div>
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                               @enderror

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">{{ __('Submit Feedback') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
