<?
$structure 	= array();
$structure["text"] = '<div class="fields_main"><div class="advance_options_fields"><input type="hidden" value="" class="input_fields" name="field[%d%][type]"><div class="advance_fields"><label for="label_%d%">Label</label><input type="text" name="field[%d%][label]" id="label_%d%" class="input_fields field_label"></div><div class="advance_fields"><label for="desc_%d%">Description</label><textarea name="field[%d%][desc]" id="desc_%d%" rows="8" cols="16"></textarea></div><div class="advance_fields"><label for="length_%d%">Length</label><input type="text" name="field[%d%][length]" id="length_%d%" class="input_fields character_fields field_length numeric"></div><div class="advance_fields"><label>Rules</label><input name="field[%d%][required]" id="required_%d%" value="%d%" type="checkbox" class="checkbox_fields"><label for="required_%d%" class="required">Required</label></div><div class="advance_fields"><label for="default_value_%d%">Default Value</label><input type="text" name="field[%d%][default_value]" id="default_value_%d%" class="input_fields field_default_value"></div><div class="advance_fields"><label for="placeholder_%d%">Placeholder</label><input type="text" name="field[%d%][placeholder]" id="placeholder_%d%" class="input_fields field_placeholder"></div><div class="advance_fields"><label for="validation_rule_%d%">Validation Rule</label><select name="field[%d%][validation_rule]" id="validation_rule_%d%"><option>None</option><option value="number">Number</option><option value="alphanumeric">Alphanumeric</option><option value="email">E-Mail</option><option value="website">Website</option>  </select></div><div class="advance_fields"><label for="validation_message_%d%">Validation Message</label><input type="text" name="field[%d%][validation_message]" id="validation_message_%d%" class="input_fields"></div><div class="advance_fields"><label for="css_%d%">CSS Class Name</label><input type="text" name="field[%d%][css]" id="css_%d%" class="input_fields"></div></div><div class="advance_btn">Advance Options</div></div>'; 

$structure["reqfield"] = '<div class="fields_main"><div class="advance_options_fields"><input type="hidden" value="" class="input_fields" name="field[%d%][type]"><input type="hidden" value="1" name="field[%d%][required]"><input type="hidden" name="field[%d%][label]"><input type="hidden" name="field[%d%][validation_rule]"><div class="advance_fields"><label for="desc_%d%">Description</label><textarea name="field[%d%][desc]" id="desc_%d%" rows="8" cols="16"></textarea></div><div class="advance_fields"><label for="length_%d%">Length</label><input type="text" name="field[%d%][length]" id="length_%d%" class="input_fields character_fields field_length numeric"></div><div class="advance_fields"><label for="default_value_%d%">Default Value</label><input type="text" name="field[%d%][default_value]" id="default_value_%d%" class="input_fields field_default_value"></div><div class="advance_fields"><label for="placeholder_%d%">Placeholder</label><input type="text" name="field[%d%][placeholder]" id="placeholder_%d%" class="input_fields field_placeholder"></div><div class="advance_fields"><label for="validation_message_%d%">Validation Message</label><input type="text" name="field[%d%][validation_message]" id="validation_message_%d%" class="input_fields"></div><div class="advance_fields"><label for="css_%d%">CSS Class Name</label><input type="text" name="field[%d%][css]" id="css_%d%" class="input_fields"></div></div><div class="advance_btn">Advance Options</div></div>';

$structure["textarea"] = '<div class="fields_main"><div class="advance_options_fields"><input type="hidden" value="" class="input_fields" name="field[%d%][type]"><div class="advance_fields"><label for="label_%d%">Label</label><input type="text" name="field[%d%][label]" id="label_%d%" class="input_fields field_label"></div><div class="advance_fields"><label for="desc_%d%">Description</label><textarea name="field[%d%][desc]" id="desc_%d%" rows="8" cols="16"></textarea></div><div class="advance_fields"><label for="rows_%d%">Rows</label><input type="text" value="8" name="field[%d%][rows]" id="rows_%d%" class="input_fields character_fields field_rows numeric"></div><div class="advance_fields"><label for="cols_%d%">Columns</label><input type="text" value="100" name="field[%d%][cols]" id="cols_%d%" class="input_fields character_fields field_cols numeric"></div><div class="advance_fields"><label>Rules</label><input name="field[%d%][required]" id="required_%d%" value="%d%" type="checkbox" class="checkbox_fields"><label for="required_%d%" class="required">Required</label></div><div class="advance_fields"><label for="default_value_%d%">Default Value</label><input type="text" name="field[%d%][default_value]" id="default_value_%d%" class="input_fields field_default_value"></div><div class="advance_fields"><label for="placeholder_%d%">Placeholder</label><input type="text" name="field[%d%][placeholder]" id="placeholder_%d%" class="input_fields field_placeholder"></div><div class="advance_fields"><label for="validation_rule_%d%">Validation Rule</label><select name="field[%d%][validation_rule]" id="validation_rule_%d%"><option>None</option><option value="number">Number</option><option value="alphanumeric">Alphanumeric</option><option value="email">E-Mail</option><option value="website">Website</option>  </select></div><div class="advance_fields"><label for="validation_message_%d%">Validation Message</label><input type="text" name="field[%d%][validation_message]" id="validation_message_%d%" class="input_fields"></div><div class="advance_fields"><label for="css_%d%">CSS Class Name</label><input type="text" name="field[%d%][css]" id="css_%d%" class="input_fields"></div></div><div class="advance_btn">Advance Options</div></div>';

$structure["dropdown"] = '<div class="fields_main"><div class="advance_options_fields"><input type="hidden" value="" class="input_fields" name="field[%d%][type]"><div class="advance_fields"><label for="label_%d%">Label</label><input type="text" name="field[%d%][label]" id="label_%d%" class="input_fields field_label"></div><div class="advance_fields"><label for="desc_%d%">Description</label><textarea name="field[%d%][desc]" id="desc_%d%" rows="8" cols="16"></textarea></div><div class="advance_fields  sel_options_%d%"><label for="display_%d%">Display Value</label><input type="text" name="field[%d%][display][]" id="display_%d%" class="input_fields character_fields select_option_display"><label for="value_%d%">Value</label><input type="text" name="field[%d%][value][]" id="value_%d%" class="input_fields character_fields select_option_value"><label>Checked</label><input type="radio" value="0" id="check_%d%" name="field[%d%][selected][]" class="select_option_checked"><a style="color:white" href="javascript:;" onclick="addOptions(%d%,\'radio\',jQuery(this));">+</a><a style="color:white;font-size: 13px;margin-left: 2px;" href="javascript:;" onclick="jQuery(this).parent().remove();">x</a></div><div class="advance_fields"><label>Rules</label><input name="field[%d%][required]" id="required_%d%" value="%d%" type="checkbox" class="checkbox_fields"><label for="required_%d%" class="required">Required</label></div><div class="advance_fields"><label for="validation_message_%d%">Validation Message</label><input type="text" name="field[%d%][validation_message]" id="validation_message_%d%" class="input_fields"></div><div class="advance_fields"><label for="css_%d%">CSS Class Name</label><input type="text" name="field[%d%][css]" id="css_%d%" class="input_fields"></div><div class="advance_fields"> <label for="list_type_%d%">List Type</label><select name="field[%d%][list_type]" id="list_type_%d%"><option>None</option><option value="country">Country</option>   <option value="months">Month</option></select></div></div><div class="advance_btn">Advance Options</div></div>';

$structure["multiselect"] = '<div class="fields_main"><div class="advance_options_fields"><input type="hidden" value="" class="input_fields" name="field[%d%][type]"><div class="advance_fields"><label for="label_%d%">Label</label><input type="text" name="field[%d%][label]" id="label_%d%" class="input_fields field_label"></div><div class="advance_fields"><label for="desc_%d%">Description</label><textarea name="field[%d%][desc]" id="desc_%d%" rows="8" cols="16"></textarea></div><div class="advance_fields  sel_options_%d%"><label for="display_%d%">Display Value</label><input type="text" name="field[%d%][display][]" id="display_%d%" class="input_fields character_fields select_option_display"><label for="value_%d%">Value</label><input type="text" name="field[%d%][value][]" id="value_%d%" class="input_fields character_fields select_option_value"><label>Checked</label><input type="checkbox" value="0" id="check_%d%" name="field[%d%][selected][]" class="select_option_checked"><a style="color:white" href="javascript:;" onclick="addOptions(%d%,\'checkbox\',jQuery(this));">+</a><a style="color:white;font-size: 13px;margin-left: 2px;" href="javascript:;" onclick="jQuery(this).parent().remove();">x</a></div><div class="advance_fields"><label>Rules</label><input name="field[%d%][required]" id="required_%d%" value="%d%" type="checkbox" class="checkbox_fields"><label for="required_%d%" class="required">Required</label></div><div class="advance_fields"><label for="validation_message_%d%">Validation Message</label><input type="text" name="field[%d%][validation_message]" id="validation_message_%d%" class="input_fields"></div><div class="advance_fields"><label for="css_%d%">CSS Class Name</label><input type="text" name="field[%d%][css]" id="css_%d%" class="input_fields"></div><div class="advance_fields"> <label for="list_type_%d%">List Type</label><select name="field[%d%][list_type]" id="list_type_%d%"><option>None</option><option value="country">Country</option>   <option value="months">Month</option></select></div></div><div class="advance_btn">Advance Options</div></div>';

$structure["number"] = '<div class="fields_main"><div class="advance_options_fields"><input type="hidden" value="" class="input_fields" name="field[%d%][type]"><div class="advance_fields"><label for="label_%d%">Label</label><input type="text" name="field[%d%][label]" id="label_%d%" class="input_fields field_label"></div><div class="advance_fields"><label for="desc_%d%">Description</label><textarea name="field[%d%][desc]" id="desc_%d%" rows="8" cols="16"></textarea></div><div class="advance_fields"><label for="min_%d%">Min</label><input type="text" name="field[%d%][min]" id="min_%d%" class="input_fields character_fields  numeric"></div><div class="advance_fields"><label for="max_%d%">Max</label><input type="text" name="field[%d%][max]" id="max_%d%" class="input_fields character_fields  numeric"></div><div class="advance_fields"><label>Rules</label><input name="field[%d%][required]" id="required_%d%" value="%d%" type="checkbox" class="checkbox_fields"><label for="required_%d%" class="required">Required</label></div><div class="advance_fields"><label for="default_value_%d%">Default Value</label><input type="text" name="field[%d%][default_value]" id="default_value_%d%" class="input_fields field_default_value"></div><div class="advance_fields"><label for="placeholder_%d%">Placeholder</label><input type="text" name="field[%d%][placeholder]" id="placeholder_%d%" class="input_fields field_placeholder"></div><div class="advance_fields"><label for="validation_message_%d%">Validation Message</label><input type="text" name="field[%d%][validation_message]" id="validation_message_%d%" class="input_fields"></div><div class="advance_fields"><label for="css_%d%">CSS Class Name</label><input type="text" name="field[%d%][css]" id="css_%d%" class="input_fields"></div></div><div class="advance_btn">Advance Options</div></div>';

$structure["checkbox"] = '<div class="fields_main"><div class="advance_options_fields"><input type="hidden" value="" class="input_fields" name="field[%d%][type]"><div class="advance_fields"><label for="label_%d%">Label</label><input type="text" name="field[%d%][label]" id="label_%d%" class="input_fields field_label"></div><div class="advance_fields"><label for="desc_%d%">Description</label><textarea name="field[%d%][desc]" id="desc_%d%" rows="8" cols="16"></textarea></div><div class="advance_fields  sel_options_%d%"><label for="display_%d%">Display Value</label><input type="text" name="field[%d%][display][]" id="display_%d%" class="input_fields character_fields checkbox_option_display"><label for="value_%d%">Value</label><input type="text" name="field[%d%][value][]" id="value_%d%" class="input_fields character_fields checkbox_option_value"><label>Checked</label><input type="checkbox" value="0" id="check_%d%" name="field[%d%][selected][]" class="checkbox_option_checked"><a style="color:white" href="javascript:;" onclick="addOptions(%d%,\'checkbox\');">+</a></div><div class="advance_fields  sel_options_%d%"><label for="display_%d%">Display Value</label><input type="text" name="field[%d%][display][]" id="display_%d%" class="input_fields character_fields checkbox_option_display"><label for="value_%d%">Value</label><input type="text" name="field[%d%][value][]" id="value_%d%" class="input_fields character_fields checkbox_option_value"><label>Checked</label><input type="checkbox" value="0" id="check_%d%" name="field[%d%][selected][]" class="checkbox_option_checked"><a style="color:white" href="javascript:;" onclick="addOptions(%d%,\'checkbox\');">+</a></div><div class="advance_fields"><label>Rules</label><input name="field[%d%][required]" id="required_%d%" value="%d%" type="checkbox" class="checkbox_fields"><label for="required_%d%" class="required">Required</label></div><div class="advance_fields"><label for="validation_message_%d%">Validation Message</label><input type="text" name="field[%d%][validation_message]" id="validation_message_%d%" class="input_fields"></div><div class="advance_fields"><label for="css_%d%">CSS Class Name</label><input type="text" name="field[%d%][css]" id="css_%d%" class="input_fields"></div></div><div class="advance_btn">Advance Options</div></div>';

$structure["radio"] = '<div class="fields_main"><div class="advance_options_fields"><input type="hidden" value="" class="input_fields" name="field[%d%][type]"><div class="advance_fields"><label for="label_%d%">Label</label><input type="text" name="field[%d%][label]" id="label_%d%" class="input_fields field_label"></div><div class="advance_fields"><label for="desc_%d%">Description</label><textarea name="field[%d%][desc]" id="desc_%d%" rows="8" cols="16"></textarea></div><div class="advance_fields  sel_options_%d%"><label for="display_%d%">Display Value</label><input type="text" name="field[%d%][display][]" id="display_%d%" class="input_fields character_fields radio_option_display"><label for="value_%d%">Value</label><input type="text" name="field[%d%][value][]" id="value_%d%" class="input_fields character_fields radio_option_value"><label>Checked</label><input type="radio" value="0" id="check_%d%" name="field[%d%][selected][]" class="radio_option_checked"><a style="color:white" href="javascript:;" onclick="addOptions(%d%,\'radio\');">+</a></div><div class="advance_fields  sel_options_%d%"><label for="display_%d%">Display Value</label><input type="text" name="field[%d%][display][]" id="display_%d%" class="input_fields character_fields radio_option_display"><label for="value_%d%">Value</label><input type="text" name="field[%d%][value][]" id="value_%d%" class="input_fields character_fields radio_option_value"><label>Checked</label><input type="radio" value="0" id="check_%d%" name="field[%d%][selected][]" class="radio_option_checked"><a style="color:white" href="javascript:;" onclick="addOptions(%d%,\'radio\');">+</a></div><div class="advance_fields"><label>Rules</label><input name="field[%d%][required]" id="required_%d%" value="%d%" type="checkbox" class="checkbox_fields"><label for="required_%d%" class="required">Required</label></div><div class="advance_fields"><label for="validation_message_%d%">Validation Message</label><input type="text" name="field[%d%][validation_message]" id="validation_message_%d%" class="input_fields"></div><div class="advance_fields"><label for="css_%d%">CSS Class Name</label><input type="text" name="field[%d%][css]" id="css_%d%" class="input_fields"></div></div><div class="advance_btn">Advance Options</div></div>';

$structure["html"] = '<div class="fields_main"><div class="advance_options_fields"><input type="hidden" value="" class="input_fields" name="field[%d%][type]"><div class="advance_fields"><label for="label_%d%">Label</label><input type="text" name="field[%d%][label]" id="label_%d%" class="input_fields field_label"></div><div class="advance_fields"><textarea rows="8" id="htmlbox_3" class="ckeditor" name="field[3][html]" cols="16"></textarea></div></div><div class="advance_btn">Advance Options</div></div>';

$structure["sectionbreak"] = '<div class="fields_main"><div class="advance_options_fields"><input type="hidden" value="" class="input_fields" name="field[%d%][type]"><div class="advance_fields"><label for="label_%d%">Label</label><input type="text" name="field[%d%][label]" id="label_%d%" class="input_fields field_label"></div></div><div class="advance_btn">Advance Options</div></div>';

$structure["pagebreak"] = '<div class="fields_main"><div class="advance_options_fields"><input type="hidden" value="" class="input_fields" name="field[%d%][type]"><div class="advance_fields"><label for="label_%d%">Label</label><input type="text" name="field[%d%][label]" id="label_%d%" class="input_fields field_label"></div></div><div class="advance_btn">Advance Options</div></div>';

$structure['name']	= '<div class="fields_main"><div class="advance_options_fields"><div class="advance_fields"><label for="label_%d%">Label</label><input type="text" name="field[%d%][label]" id="label_%d%" class="input_fields field_label"></div><div class="advance_fields"><label for="name_format_%d%">Name Format</label><select class="name_format" name="field[%d%][name_format]" id="name_format_%d%"><option value="normal">Normal</option><option value="simple">Simple</option><option value="extended">Extended</option></select></div><input type="hidden" value="" class="input_fields" name="field[%d%][type]"><div class="advance_fields"><label for="desc_%d%">Description</label><textarea name="field[%d%][desc]" id="desc_%d%" rows="8" cols="16"></textarea></div><div class="advance_fields"><label>Rules</label><input name="field[%d%][required]" id="required_%d%" value="%d%" type="checkbox" class="checkbox_fields"><label for="required_%d%" class="required">Required</label></div><div class="advance_fields"><label for="validation_message_%d%">Validation Message</label><input type="text" name="field[%d%][validation_message]" id="validation_message_%d%" class="input_fields"></div><div class="advance_fields"><label for="css_%d%">CSS Class Name</label><input type="text" name="field[%d%][css]" id="css_%d%" class="input_fields"></div></div><div class="advance_btn">Advance Options</div></div>';

$structure['time']	= '<div class="fields_main"><div class="advance_options_fields"><div class="advance_fields"><label for="label_%d%">Label</label><input type="text" name="field[%d%][label]" id="label_%d%" class="input_fields field_label"></div><div class="advance_fields"> <label for="time_type_%d%">List Type</label><select class="time_format" name="field[%d%][time_type]" id="time_type_%d%"><option value="12">12 hour</option><option value="24">24 hour</option></select></div><input type="hidden" value="" class="input_fields" name="field[%d%][type]"><div class="advance_fields"><label for="desc_%d%">Description</label><textarea name="field[%d%][desc]" id="desc_%d%" rows="8" cols="16"></textarea></div><div class="advance_fields"><label>Rules</label><input name="field[%d%][required]" id="required_%d%" value="%d%" type="checkbox" class="checkbox_fields"><label for="required_%d%" class="required">Required</label></div><div class="advance_fields"><label for="validation_message_%d%">Validation Message</label><input type="text" name="field[%d%][validation_message]" id="validation_message_%d%" class="input_fields"></div><div class="advance_fields"><label for="css_%d%">CSS Class Name</label><input type="text" name="field[%d%][css]" id="css_%d%" class="input_fields"></div></div><div class="advance_btn">Advance Options</div></div>';

$structure['address']	= '<div class="fields_main"><div class="advance_options_fields"><div class="advance_fields"><label for="label_%d%">Label</label><input type="text" name="field[%d%][label]" id="label_%d%" class="input_fields field_label"></div><div class="advance_fields"> <label for="address_type_%d%">List Type</label><select class="address_type" name="field[%d%][address_type]" id="address_type_%d%"><option value="International">International</option><option value="United States">United States</option><option value="Canada">Canada</option></select></div><div id="default_country_div_%d%" class="advance_fields"> <label for="default_country_%d%">Default Country</label><select class="default_country" name="field[%d%][default_country]" id="default_country_%d%"><option value="" selected="selected"></option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option><option value="Congo, Republic of the">Congo, Republic of the</option><option value="Costa Rica">Costa Rica</option><option value="Côte d\'Ivoire">Côte d\'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="North Korea">North Korea</option><option value="South Korea">South Korea</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Norway">Norway</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestine">Palestine</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia and Montenegro">Serbia and Montenegro</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Sudan, South">Sudan, South</option><option value="Suriname">Suriname</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican City">Vatican City</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands, British">Virgin Islands, British</option><option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select></div><input type="hidden" value="" class="input_fields" name="field[%d%][type]"><div class="advance_fields"><label for="desc_%d%">Description</label><textarea name="field[%d%][desc]" id="desc_%d%" rows="8" cols="16"></textarea></div><div class="advance_fields"><label for="required_%d%">Rules</label><input name="field[%d%][required]" id="required_%d%" value="%d%" type="checkbox" class="checkbox_fields"><label for="required_%d%" class="required">Required</label></div><div class="advance_fields"><label for="hide_address2_%d%">Hide Address 2</label><input onchange="checkEvents(this,\'address_address2_%d%\')" name="field[%d%][hide_address2]" id="hide_address2_%d%" value="%d%" type="checkbox" class="checkbox_fields"><label for="hide_address2_%d%" class="required"></label></div><div class="advance_fields"><label for="hide_state_%d%">Hide State</label><input onchange="checkEvents(this,\'state_div_%d%\')" name="field[%d%][hide_state]" id="hide_state_%d%" value="%d%" type="checkbox" class="checkbox_fields"><label for="hide_state_%d%" class="required"></label></div><div class="advance_fields"><label for="validation_message_%d%">Validation Message</label><input type="text" name="field[%d%][validation_message]" id="validation_message_%d%" class="input_fields"></div><div class="advance_fields"><label for="css_%d%">CSS Class Name</label><input type="text" name="field[%d%][css]" id="css_%d%" class="input_fields"></div></div><div class="advance_btn">Advance Options</div></div>';

$structure['phone']	= '<div class="fields_main"><div class="advance_options_fields"><input type="hidden" class="input_fields" name="field[%d%][type]"><div class="advance_fields"><label for="label_%d%">Label</label><input type="text" name="field[%d%][label]" id="label_%d%" class="input_fields field_label"></div><div class="advance_fields"><label for="desc_%d%">Description</label><textarea name="field[%d%][desc]" id="desc_%d%" rows="8" cols="16"></textarea></div><div class="advance_fields"><label for="required_%d%">Rules</label><input name="field[%d%][required]" id="required_%d%" value="%d%" type="checkbox" class="checkbox_fields"><label for="required_%d%" class="required">Required</label></div><div class="advance_fields"><label for="default_value_%d%">Default Value</label><input type="text" name="field[%d%][default_value]" id="default_value_%d%" class="input_fields field_default_value"></div><div class="advance_fields"> <label for="phone_format_%d%">Phone Format</label><select class="phone_format" name="field[%d%][phone_format]" id="phone_format_%d%"><option value="standard">(###)### - ####</option><option value="international">International</option></select></div><div class="advance_fields"><label for="validation_message_%d%">Validation Message</label><input type="text" name="field[%d%][validation_message]" id="validation_message_%d%" class="input_fields"></div><div class="advance_fields"><label for="css_%d%">CSS Class Name</label><input type="text" name="field[%d%][css]" id="css_%d%" class="input_fields"></div></div><div class="advance_btn">Advance Options</div></div>';

$structure['date']	= '<div class="fields_main"><div class="advance_options_fields"><input type="hidden" class="input_fields" name="field[%d%][type]" id="type_%d%"><div class="advance_fields"><label for="label_%d%">Label</label><input type="text" name="field[%d%][label]" id="label_%d%" class="input_fields field_label"></div><div class="advance_fields"><label for="desc_%d%">Description</label><textarea name="field[%d%][desc]" id="desc_%d%" rows="8" cols="16"></textarea></div><div class="advance_fields"><label for="required_%d%">Rules</label><input name="field[%d%][required]" id="required_%d%" value="%d%" type="checkbox" class="checkbox_fields"><label for="required_%d%" class="required">Required</label></div><div class="advance_fields"> <label for="date_type_%d%">Date Format</label><select class="date_format" name="field[%d%][date_format]" id="date_format_%d%"><option value="mm/dd/yyyy">mm/dd/yyyy</option><option value="dd/mm/yyyy">dd/mm/yyyy</option><option value="dd-mm-yyyy">dd-mm-yyyy</option><option value="dd.mm.yyyy">dd.mm.yyyy</option><option value="yyyy/mm/dd">yyyy/mm/dd</option><option value="yyyy.mm.dd">yyyy.mm.dd</option></select></div><div class="advance_fields"> <label for="date_type_%d%">Date Input Type</label><select class="date_type" name="field[%d%][date_type]" id="date_type_%d%"><option value="datefield">Date Field</option><option value="datepicker">Date Picker</option><option value="datedropdown">Date Drop Down</option></select></div><div style="display:none;" id="icon_div_%d%" class="advance_fields"> <label for="date_type_%d%">&nbsp;</label><div class="calendar_icon_type"><input class="calendar_icon" type="radio" id="calendar_icon_%d%_none" name="field[%d%][calendar_icon]" value="none" checked="checked"><label for="calendar_icon_%d%_none"> No Icon </label>&nbsp;&nbsp;<input class="calendar_icon" type="radio" id="calendar_icon_%d%_calendar" name="field[%d%][calendar_icon]" value="calendar"><label for="calendar_icon_%d%_calendar"> Calendar Icon </label>&nbsp;&nbsp;<input class="calendar_icon" type="radio" id="calendar_icon_%d%_custom" name="field[%d%][calendar_icon]" value="custom"><label for="calendar_icon_%d%_custom"> Custom Icon </label></div><div id="icon_url_container_%d%" style="display: none;float:left;clear: both;">  <label for="cfield_calendar_icon_%d%_url"> Image Path: </label>  <input type="text" class="input_fields" id="cfield_calendar_icon_%d%_url"></div></div><div class="advance_fields"><label for="validation_message_%d%">Validation Message</label><input type="text" name="field[%d%][validation_message]" id="validation_message_%d%" class="input_fields"></div><div class="advance_fields"><label for="css_%d%">CSS Class Name</label><input type="text" name="field[%d%][css]" id="css_%d%" class="input_fields"></div></div><div class="advance_btn">Advance Options</div></div>';