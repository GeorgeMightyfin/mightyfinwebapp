<div class="step-panel step" id="step2">
    <div class="step-header">
        <h5 class="step-title">KYC Documents</h5>
        <span class="step-indicator">Step 2/4</span>
    </div>

    <div class="document-upload-grid">
        <!-- NRC Document Upload -->
        <div class="upload-cell">
            <label class="form-label">National ID Copy</label>
            <div class="upload-container">
                <input type="file" value="{{ $meta->uploads->where('name', 'nrc_file')->first()->path }}" class="file-input visually-hidden" id="fileInput" accept=".pdf, .doc, .docx" name="nrc_file">

                <label for="fileInput" class="upload-button">
                    <span class="upload-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                            <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
                        </svg>
                    </span>
                    <span class="upload-text">Upload Copy of NRC </span>
                    <small class="p">Upload Copy of One World or PDF Document (Having Front & Back Sides)</small>
                </label>

                <div class="upload-status">
                    <ul class="file-list" id="fileList"></ul>
                    @if ($meta->uploads->where('name', 'nrc_file')->isNotEmpty())
                        <div class="uploaded-file-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                            <span>National ID Copy uploaded on
                            {{
                                $meta->uploads->where('name', 'nrc_file')->first() != null ?
                                $meta->uploads->where('name', 'nrc_file')->first()->created_at->toFormattedDateString() : ''
                            }}
                            </span>
                        </div>
                    @endif
                </div>
                <small id="nrcFileError" class="error-text"></small>
            </div>
        </div>

        <!-- TPIN Document Upload -->
        <div class="upload-cell">
            <label class="form-label">Tax ID Copy</label>
            <div class="upload-container">
                <input type="file" class="file-input visually-hidden" value="{{ $meta->uploads->where('name', 'tpin_file')->first()->path }}" id="fileInput2" accept=".pdf, .doc, .docx" name="tpin_file">

                <label for="fileInput2" class="upload-button">
                    <span class="upload-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                            <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
                        </svg>
                    </span>
                    <span class="upload-text">Upload Copy of Tpin <span class="optional-badge">Optional</span></span>
                    <small class="p">Upload Copy of your TPIN in PDF or Word document</small>

                </label>

                <div class="upload-status">
                    <ul class="file-list-2" id="fileList-2"></ul>
                    @if ($meta->uploads->where('name', 'tpin_file')->isNotEmpty())
                        <div class="uploaded-file-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                            <span>Tpin Copy uploaded on
                                {{
                                    $meta->uploads->where('name', 'tpin_file')->first() != null ?
                                    $meta->uploads->where('name', 'tpin_file')->first()->created_at->toFormattedDateString() : ''
                                }}
                            </span>
                        </div>
                    @endif
                </div>
                <small id="fiileInput2Error" class="error-text"></small>
            </div>
        </div>
    </div>

    <div class="form-actions">
        <button type="button" class="btn btn-secondary" onclick="prevStep(2)">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg>
            Back
        </button>
        <button type="button" class="btn btn-primary" style="background: linear-gradient(135deg, #6a3093, #873093)" onclick="nextStep(2)">
            Continue to Next Step
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg>
        </button>
    </div>
</div>

<style>
/* Modern Sleek Form Styling */
.step-panel {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
    padding: 1.75rem;
    max-width: 900px;
    margin: 0 auto;
}

.step-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.5rem;
    padding-bottom: 0.75rem;
    border-bottom: 1px solid rgba(0, 0, 0, 0.08);
}

.step-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: #333;
    margin: 0;
    position: relative;
    padding-left: 1rem;
}

.step-title:before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 4px;
    background: linear-gradient(180deg, #6a3093, #7f3093);
    border-radius: 2px;
}

.step-indicator {
    font-size: 0.75rem;
    font-weight: 500;
    color: #6b7280;
    background: #f3f4f6;
    padding: 0.25rem 0.75rem;
    border-radius: 100px;
}

.document-upload-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.5rem;
}

.upload-cell {
    position: relative;
}

.form-label {
    display: block;
    font-size: 0.75rem;
    font-weight: 600;
    color: #4b5563;
    margin-bottom: 0.5rem;
    letter-spacing: 0.5px;
    text-transform: uppercase;
}

.upload-container {
    border: 1px dashed #d1d5db;
    border-radius: 8px;
    padding: 1.5rem;
    background-color: #f9fafb;
    transition: all 0.2s ease;
}

.upload-container:hover {
    border-color: #6a3093;
    background-color: rgba(59, 130, 246, 0.05);
}

.upload-button {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #6a3093, #823093);
    color: white;
    border-radius: 8px;
    padding: 1rem;
    cursor: pointer;
    transition: all 0.2s ease;
    width: 100%;
    text-align: center;
    box-shadow: 0 4px 6px -1px rgba(59, 130, 246, 0.3);
}

.upload-button:hover {
    background: linear-gradient(135deg, #6a3093, #823093);
    transform: translateY(-1px);
    box-shadow: 0 6px 8px -1px rgba(59, 130, 246, 0.4);
}

.upload-icon {
    margin-bottom: 0.5rem;
}

.upload-text {
    font-weight: 500;
}

.optional-badge {
    display: inline-block;
    background-color: #ef4444;
    color: white;
    font-size: 0.65rem;
    font-weight: 600;
    padding: 0.15rem 0.5rem;
    border-radius: 100px;
    margin-left: 0.5rem;
    vertical-align: middle;
}

.upload-status {
    margin-top: 1rem;
}

.uploaded-file-info {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem;
    background-color: #ecfdf5;
    border-radius: 6px;
    color: #047857;
    font-size: 0.8rem;
}

.uploaded-file-info svg {
    flex-shrink: 0;
}

.error-text {
    display: block;
    font-size: 0.7rem;
    color: #ef4444;
    margin-top: 0.25rem;
    font-weight: 500;
}

.form-actions {
    display: flex;
    justify-content: flex-end;
    gap: 0.75rem;
    margin-top: 1.5rem;
    padding-top: 1rem;
    border-top: 1px solid rgba(0, 0, 0, 0.08);
}

.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    font-weight: 500;
    font-size: 0.875rem;
    padding: 0.6rem 1.25rem;
    border-radius: 6px;
    transition: all 0.2s ease;
    cursor: pointer;
    border: none;
}

.btn-primary {
    background: linear-gradient(135deg, #6a3093, #823093);
    color: white;
    box-shadow: 0 4px 6px -1px rgba(59, 130, 246, 0.3);
}

.btn-primary:hover {
    background: linear-gradient(135deg, #6a3093, #823093);
    box-shadow: 0 6px 8px -1px rgba(59, 130, 246, 0.4);
    transform: translateY(-1px);
}

.btn-secondary {
    background-color: #f3f4f6;
    color: #4b5563;
    border: 1px solid #e5e7eb;
}

.btn-secondary:hover {
    background-color: #e5e7eb;
    color: #1f2937;
}

.visually-hidden {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .document-upload-grid {
        grid-template-columns: 1fr;
    }

    .step-panel {
        padding: 1.25rem;
    }
}
</style>