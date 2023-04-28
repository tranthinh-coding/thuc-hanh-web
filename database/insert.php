<?php

require '../constants.php';

$conn = mysqli_connect(HOST, USER_NAME, PASSWORD, DB_NAME);

$san_pham = [
  // 1
  [
    'ten_san_pham' => 'Roland FP-90X',
    'gia' => 44900000,
    'so_luong' => 1,
    'so_luong_da_ban' => 0,
    'mo_ta' => "<div id=\"tkst\" class=\"description_singer maxheigh300\"><p>[Sound Generator]&nbsp;</p>

    <p>-Piano Sound&nbsp;</p>
    
    <p>Piano Sound:&nbsp;PureAcoustic&nbsp;Piano Modeling&nbsp;</p>
    
    <p>-Max. Polyphony&nbsp;</p>
    
    <p>Piano:Limitless&nbsp;(Solo playing using No.1 to No.8 tones in piano category)&nbsp;</p>
    
    <p>Other: 256&nbsp;</p>
    
    <p>-Tones&nbsp;</p>
    
    <p>Piano: 20 tones&nbsp;</p>
    
    <p>E.Piano: 18 tones&nbsp;</p>
    
    <p>Organ: 18 tones&nbsp;</p>
    
    <p>Strings/Pad: 27 tones&nbsp;</p>
    
    <p>Synth/Other: 279 tones (including 8 drum sets, 1 SFX set)&nbsp;</p>
    
    <p>&nbsp;</p>
    
    <p>[Ambience]&nbsp;</p>
    
    <p>PureAcoustic&nbsp;Ambience&nbsp;</p>
    
    <p>Type: Studio, Lounge, Concert Hall, Wooden Hall, Stone Hall, Cathedral&nbsp;</p>
    
    <p>Depth: 11 types&nbsp;</p>
    
    <p>&nbsp;</p>
    
    <p>[My Stage]&nbsp;</p>
    
    <p>12 types&nbsp;</p>
    
    <p>&nbsp;</p>
    
    <p>[Keyboard]&nbsp;</p>
    
    <p>-Keyboard&nbsp;</p>
    
    <p>PHA-50 Keyboard: Wood and Plastic Hybrid Structure, with Escapement and Ebony/Ivory Feel (88 keys)&nbsp;</p>
    
    <p>&nbsp;</p>
    
    <p>[Speaker System]&nbsp;</p>
    
    <p>-Speakers&nbsp;</p>
    
    <p>Speakers: 8 x 12 cm (3-3/16 x 4-3/4 inches) x 2 (with speaker box)&nbsp;</p>
    
    <p>Dome Tweeters: 2.5 cm (1 inches) x 2&nbsp;</p>
    
    <p>-Rated Power Output&nbsp;</p>
    
    <p>25 W x 2&nbsp;</p>
    
    <p>5 W x 2&nbsp;</p>
    
    <p>&nbsp;</p>
    
    <p>[Headphones]&nbsp;</p>
    
    <p>Headphones Acoustic Projection&nbsp;</p>
    
    <p>&nbsp;</p>
    
    <p>[Bluetooth]&nbsp;</p>
    
    <p>Audio: Bluetooth Ver 3.0 (Supports SCMS-T content protection)&nbsp;</p>
    
    <p>MIDI: Bluetooth Ver 4.0&nbsp;</p>
    
    <p>&nbsp;</p>
    
    <p>[Compatible Android / iOS Apps (Roland)]&nbsp;</p>
    
    <p>Piano Every Day&nbsp;</p>
    
    <p>Piano Designer&nbsp;</p>
    
    <p>&nbsp;</p>
    
    <p>[Data Playback]&nbsp;</p>
    
    <p>-Playable Software&nbsp;</p>
    
    <p>Standard MIDI Files (Format 0, 1)&nbsp;</p>
    
    <p>Audio File (WAV: 44.1 kHz, 16-bit linear format, MP3: 44.1 kHz, 64 kbps - 320 kbps, requires USB flash drive)&nbsp;</p>
    
    <p>&nbsp;</p>
    
    <p>[Recorder]&nbsp;</p>
    
    <p>-Recordable Software&nbsp;</p>
    
    <p>Standard MIDI Files (Format 0, 3 parts, Approx. 70,000 notes memory)&nbsp;</p>
    
    <p>Audio File (WAV: 44.1 kHz, 16-bit linear format, requires USB flash drive)&nbsp;</p>
    
    <p>&nbsp;</p>
    
    <p>[Internal Songs]&nbsp;</p>
    
    <p>34 Songs&nbsp;</p>
    
    <p>&nbsp;</p>
    
    <p>[Tuning, Voicing]&nbsp;</p>
    
    <p>-Touch Sensitivity&nbsp;</p>
    
    <p>Key Touch: 100 types, fixed touch&nbsp;</p>
    
    <p>Hammer Response: 10 types&nbsp;</p>
    
    <p>-Master Tuning&nbsp;</p>
    
    <p>415.3--466.2 Hz (adjustable in increments of 0.1 Hz)&nbsp;</p>
    
    <p>-Temperament&nbsp;</p>
    
    <p>10 types (Equal, Just Major, Just Minor, Pythagorean,&nbsp;Kirnberger&nbsp;I,&nbsp;Kirnberger&nbsp;II,&nbsp;Kirnberger&nbsp;III, Meantone,&nbsp;Werckmeister, Arabic), selectable temperament key&nbsp;</p>
    
    <p>- Effects&nbsp;</p>
    
    <p>Ambience&nbsp;</p>
    
    <p>Equalizer (3-band digital equalizer)&nbsp;</p>
    
    <p>Only for organ tones:&nbsp;</p>
    
    <p>Rotary Speaker Effect&nbsp;</p>
    
    <p>Only for&nbsp;E.Piano&nbsp;tones:&nbsp;</p>
    
    <p>Modulation Speed&nbsp;</p>
    
    <p>- Mic Effects&nbsp;</p>
    
    <p>Compressor&nbsp;</p>
    
    <p>Doubling&nbsp;</p>
    
    <p>Echo&nbsp;</p>
    
    <p>-Piano Designer&nbsp;</p>
    
    <p>Lid&nbsp;</p>
    
    <p>Key Off Noise&nbsp;</p>
    
    <p>Hammer Noise&nbsp;</p>
    
    <p>Duplex Scale&nbsp;</p>
    
    <p>Full Scale String Resonance&nbsp;</p>
    
    <p>Key Off Resonance&nbsp;</p>
    
    <p>Cabinet Resonance&nbsp;</p>
    
    <p>Soundboard Type&nbsp;</p>
    
    <p>Damper Noise&nbsp;</p>
    
    <p>Soft Pedal Type&nbsp;</p>
    
    <p>Single Note Tuning&nbsp;</p>
    
    <p>Single Note Volume&nbsp;</p>
    
    <p>Single Note Character&nbsp;</p>
    
    <p>&nbsp;</p>
    
    <p>[Convenient Functions]&nbsp;</p>
    
    <p>Metronome (adjustable Tempo/Beat/Down beat/Pattern/Volume/Tone)&nbsp;</p>
    
    <p>Auto Tempo&nbsp;</p>
    
    <p>Transpose (Keyboard/Song: in semitones)&nbsp;</p>
    
    <p>Registration (45 registrations, capable of pedal shift)&nbsp;</p>
    
    <p>Registration Set&nbsp;</p>
    
    <p>Dual&nbsp;</p>
    
    <p>Split (split point adjustable)&nbsp;</p>
    
    <p>Twin Piano&nbsp;</p>
    
    <p>Tone Demo&nbsp;</p>
    
    <p>Auto Off&nbsp;</p>
    
    <p>&nbsp;</p>
    
    <p>[Other]&nbsp;</p>
    
    <p>-Display&nbsp;</p>
    
    <p>Graphic LCD 132 x 32 dots&nbsp;</p>
    
    <p>-Control&nbsp;</p>
    
    <p>Volume slider&nbsp;</p>
    
    <p>Equalizer sliders (Low/Mid/High)&nbsp;</p>
    
    <p>Part sliders (Lower/Upper)&nbsp;</p>
    
    <p>Song Vol. slider&nbsp;</p>
    
    <p>Mic Vol. slider&nbsp;</p>
    
    <p>Speaker switch&nbsp;</p>
    
    <p>Mic Gain knob&nbsp;</p>
    
    <p>-Connectors&nbsp;</p>
    
    <p>DC In jack&nbsp;</p>
    
    <p>Pedal (Damper/R, Sostenuto/C *1, Soft/L *1) jacks: TRS 1/4-inch phone type&nbsp;</p>
    
    <p>Input Stereo jack: Stereo miniature phone type&nbsp;</p>
    
    <p>Output (L/Mono, R) jacks: 1/4-inch phone type&nbsp;</p>
    
    <p>Mic Input jack: 1/4-inch phone type&nbsp;</p>
    
    <p>USB Computer port: USB B type&nbsp;</p>
    
    <p>USB Memory port: USB A type&nbsp;</p>
    
    <p>Phones jack x 2: Stereo miniature phone type, Stereo 1/4-inch phone type&nbsp;</p>
    
    <p>MIDI (Out, In) connectors&nbsp;</p>
    
    <p>*1: Assignable&nbsp;</p>
    
    <p>-Power Supply&nbsp;</p>
    
    <p>AC adaptor&nbsp;</p>
    
    <p>-Power Consumption&nbsp;</p>
    
    <p>40W (When using the included AC adaptor)&nbsp;</p>
    
    <p>*Approximate power consumption when playing the piano at medium volume: 14W&nbsp;</p>
    
    <p>Power consumption when sound has not been played after power-on: 12W&nbsp;</p>
    
    <p>&nbsp;</p>
    
    <p>[Dimensions]&nbsp;</p>
    
    <p>Detached music rest:&nbsp;</p>
    
    <p>1,340 (W) x 390 (D) x 136 (H) mm&nbsp;</p>
    
    <p>52-13/16 (W) x 15-3/8 (D) x 5-3/8 (H) inches&nbsp;</p>
    
    <p>FP-90X with KSC-90 and music rest:&nbsp;</p>
    
    <p>1,340 (W) x 418 (D) x 932 (H) mm&nbsp;</p>
    
    <p>52-13/16 (W) x 16-1/2 (D) x 36-3/4 (H) inches&nbsp;</p>
    
    <p>&nbsp;</p>
    
    <p>[Weight]&nbsp;</p>
    
    <p>23.6 kg, 52&nbsp;lbs&nbsp;1 oz (FP-90X with music rest)&nbsp;</p>
    
    <p>37.8 kg, 83&nbsp;lbs&nbsp;6 oz (FP-90X with KSC-90, KPD-90, and music rest)&nbsp;</p>
    
    <p>&nbsp;</p>
    
    <p>[Accessories]&nbsp;</p>
    
    <p>Owner's Manual&nbsp;</p>
    
    <p>Leaflet \"USING THE UNIT SAFELY\"&nbsp;</p>
    
    <p>AC adaptor&nbsp;</p>
    
    <p>Power cord&nbsp;</p>
    
    <p>Music rest&nbsp;</p>
    
    <p>Damper pedal (DP-10, capable of continuous detection)&nbsp;</p>
    
    <p>&nbsp;</p>
    
    <p>[Option (sold separately)]&nbsp;</p>
    
    <p>Dedicated stand: KSC-90&nbsp;</p>
    
    <p>Dedicated pedal board: KPD-90&nbsp;</p>
    
    <p>Keyboard stand: KS-G8B, KS-10Z, KS-12, KS-20X&nbsp;</p>
    
    <p>Pedal unit: RPU-3&nbsp;</p>
    
    <p>Damper pedal: DP series&nbsp;</p>
    
    <p>Pedal switch: DP-2 (*1)&nbsp;</p>
    
    <p>Expression pedal: EV-5&nbsp;</p>
    
    <p>Carrying Bag: CB-88RL&nbsp;</p>
    
    <p>Headphones&nbsp;</p>
    
    <p>*1 Cannot use for Damper/R.&nbsp;</p>
    </div>",
    'hinh_anh' => 'dan-piano-dien-roland-fp-90x-400x400.jpg',
  ],
  // 2
  [
    'ten_san_pham' => 'Jackson JS Series Dinky™ JS12',
    'gia' => 6101000,
    'so_luong' => 15,
    'so_luong_da_ban' => 3,
    'mo_ta' => '<table cellspacing="0">
    <tbody>
      <tr>
        <td>THÔNG TIN CHUNG</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Tên sản phẩm</td>
        <td>JS Series Dinky™ JS12, Rosewood Fingerboard</td>
      </tr>
      <tr>
        <td>Dòng</td>
        <td>JS</td>
      </tr>
      <tr>
        <td>Màu</td>
        <td>Gloss Black,&nbsp;Metallic Blue,&nbsp;Metallic Red,&nbsp;Gloss White</td>
      </tr>
      <tr>
        <td>THÂN</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Hình dạng</td>
        <td>Dinky™</td>
      </tr>
      <tr>
        <td>Chất liệu thân đàn</td>
        <td>Poplar</td>
      </tr>
      <tr>
        <td>Lớp sơn</td>
        <td>Gloss Polyester</td>
      </tr>
      <tr>
        <td>CẦN ĐÀN</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Chất liệu cần đàn</td>
        <td>1-Piece Bolt-On Maple with Graphite Reinforcement and Scarf Joint</td>
      </tr>
      <tr>
        <td>Lớp sơn</td>
        <td>Satin</td>
      </tr>
      <tr>
        <td>Hình dạng cần</td>
        <td>3rd Fret: .755", 12th Fret: .815"</td>
      </tr>
      <tr>
        <td>Chiều dài</td>
        <td>25.5" (648 mm)</td>
      </tr>
      <tr>
        <td>Phím đàn</td>
        <td>Rosewood</td>
      </tr>
      <tr>
        <td>DĐường kính phím</td>
        <td>12" (305 mm)</td>
      </tr>
      <tr>
        <td>Số ngăn</td>
        <td>24</td>
      </tr>
      <tr>
        <td>Kích thước năng</td>
        <td>Jumbo</td>
      </tr>
      <tr>
        <td>Độ rộng Nut</td>
        <td>1.6875" (42.8 mm)</td>
      </tr>
      <tr>
        <td>Vị trí Inplay</td>
        <td>Pearloid Dot</td>
      </tr>
      <tr>
        <td>Headstock</td>
        <td>4-Bolt</td>
      </tr>
      <tr>
        <td>Neck Plate</td>
        <td>Satin</td>
      </tr>
      <tr>
        <td>PHẦN ĐIỆN</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Pickup ngựa đàn</td>
        <td>Jackson® High Output Humbucking</td>
      </tr>
      <tr>
        <td>Pickup cần đàn</td>
        <td>Jackson® High Output Humbucking</td>
      </tr>
      <tr>
        <td>Pickup Switching</td>
        <td>3-Position Blade: Position 1. Bridge Pickup, Position 2. Bridge and Neck Pickups, Position 3. Neck Pickup</td>
      </tr>
      <tr>
        <td>Điều khiển</td>
        <td>Master Volume, Master Tone</td>
      </tr>
      <tr>
        <td>Cấu hình Pickup</td>
        <td>HH</td>
      </tr>
      <tr>
        <td>PHẦN CỨNG</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>NGỰA ĐÀN</td>
        <td>2-Point Fulcrum Tremolo</td>
      </tr>
    </tbody>
  </table>',
    'hinh_anh' => 'jackson-js-series-dinkyjs12-wh-270x270.jpg',
  ],
  // 3
  [
    'ten_san_pham' => 'Session Studio Select STS924XFP',
    'gia' => 34900000,
    'so_luong' => 4,
    'so_luong_da_ban' => 1,
    'mo_ta' => '<table border="1" cellspacing="0" style="width:100%">
    <tbody>
      <tr>
        <td>
        <p style="text-align:justify"><span style="color:#000000">Trống&nbsp; Bass&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
        </td>
        <td>
        <p style="text-align:justify"><span style="color:#000000">22x16</span></p>
        </td>
      </tr>
      <tr>
        <td>
        <p style="text-align:justify"><span style="color:#000000">Trống&nbsp; Tom</span></p>
        </td>
        <td>
        <p style="text-align:justify"><span style="color:#000000">10x7</span></p>
        </td>
      </tr>
      <tr>
        <td>
        <p style="text-align:justify"><span style="color:#000000">Trống&nbsp; Tom&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
        </td>
        <td>
        <p style="text-align:justify"><span style="color:#000000">12x8</span></p>
        </td>
      </tr>
      <tr>
        <td>
        <p style="text-align:justify"><span style="color:#000000">Trống&nbsp; Floor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
        </td>
        <td>
        <p style="text-align:justify"><span style="color:#000000">16x16</span></p>
        </td>
      </tr>
    </tbody>
  </table>',
    'hinh_anh' => 'trong-session-studio-select-sts924xspc-1.gif',
  ],
  // 4
  [
    'ten_san_pham' => 'Roland RP-30',
    'gia' => 24400000,
    'so_luong' => 4,
    'so_luong_da_ban' => 1,
    'mo_ta' => '<table border="1" cellpadding="0" cellspacing="0" dir="ltr" style="width:100%">
    <tbody>
      <tr>
        <td colspan="2" rowspan="1" style="text-align:justify"><span style="color:#000000">SIZE (INCLUDING PIANO STAND, WITH MUSIC REST)</span></td>
      </tr>
      <tr>
        <td style="text-align:justify"><span style="color:#000000">Width</span></td>
        <td style="text-align:justify"><span style="color:#000000">1,380 mm<br>
        54-3/8 inches</span></td>
      </tr>
      <tr>
        <td style="text-align:justify"><span style="color:#000000">Depth</span></td>
        <td style="text-align:justify"><span style="color:#000000">485 mm<br>
        19-1/8 inches</span></td>
      </tr>
      <tr>
        <td style="text-align:justify"><span style="color:#000000">Height</span></td>
        <td style="text-align:justify"><span style="color:#000000">1,000 mm<br>
        39-3/8 inches</span></td>
      </tr>
      <tr>
        <td colspan="2" rowspan="1" style="text-align:justify"><span style="color:#000000">SIZE (INCLUDING PIANO STAND, WITHOUT MUSIC REST)</span></td>
      </tr>
      <tr>
        <td style="text-align:justify"><span style="color:#000000">Width</span></td>
        <td style="text-align:justify"><span style="color:#000000">1,380 mm<br>
        54-3/8 inches</span></td>
      </tr>
      <tr>
        <td style="text-align:justify"><span style="color:#000000">Depth</span></td>
        <td style="text-align:justify"><span style="color:#000000">485 mm<br>
        19-1/8 inches</span></td>
      </tr>
      <tr>
        <td style="text-align:justify"><span style="color:#000000">Height</span></td>
        <td style="text-align:justify"><span style="color:#000000">850 mm<br>
        33-1/2 inches</span></td>
      </tr>
      <tr>
        <td colspan="2" rowspan="1" style="text-align:justify"><span style="color:#000000">WEIGHT (INCLUDING PIANO STAND)</span></td>
      </tr>
      <tr>
        <td style="text-align:justify"><span style="color:#000000">Weight</span></td>
        <td style="text-align:justify"><span style="color:#000000">48 kg<br>
        105 lbs 14 oz</span></td>
      </tr>
      <tr>
        <td colspan="2" rowspan="1" style="text-align:justify"><span style="color:#000000">KEYBOARD</span></td>
      </tr>
      <tr>
        <td style="text-align:justify"><span style="color:#000000">Keyboard</span></td>
        <td style="text-align:justify"><span style="color:#000000">88 keys (Ivory Feel Keyboard with escapement)</span></td>
      </tr>
      <tr>
        <td style="text-align:justify"><span style="color:#000000">Touch Sensitivity</span></td>
        <td style="text-align:justify"><span style="color:#000000">Key Touch: 3 types<br>
        Keyboard Mode</span></td>
      </tr>
      <tr>
        <td style="text-align:justify"><span style="color:#000000">Whole</span></td>
        <td style="text-align:justify"><span style="color:#000000">Dual</span></td>
      </tr>
      <tr>
        <td style="text-align:justify"><span style="color:#000000">Pedals</span></td>
        <td style="text-align:justify"><span style="color:#000000">Damper<br>
        Soft<br>
        Sostenuto</span></td>
      </tr>
      <tr>
        <td style="text-align:justify"><span style="color:#000000">SOUND GENERATOR</span><br>
        &nbsp;</td>
        <td style="text-align:justify"><span style="color:#000000">Piano Sound<br>
        <br>
        Roland Piano Sounds</span></td>
      </tr>
      <tr>
        <td style="text-align:justify"><span style="color:#000000">Max. Polyphony</span><br>
        &nbsp;</td>
        <td style="text-align:justify"><span style="color:#000000">128 voices</span><br>
        &nbsp;</td>
      </tr>
      <tr>
        <td style="text-align:justify"><span style="color:#000000">Tones</span></td>
        <td style="text-align:justify"><span style="color:#000000">15 Tones</span><br>
        &nbsp;</td>
      </tr>
      <tr>
        <td style="text-align:justify"><span style="color:#000000">Master Tuning</span><br>
        &nbsp;</td>
        <td style="text-align:justify"><span style="color:#000000">415.3–466.2 Hz (adjustable in increments of 0.1 Hz)</span><br>
        &nbsp;</td>
      </tr>
      <tr>
        <td style="text-align:justify"><span style="color:#000000">Transpose</span><br>
        &nbsp;</td>
        <td style="text-align:justify"><span style="color:#000000">Key Transpose: -6–+5 (in semitones)</span><br>
        &nbsp;</td>
      </tr>
      <tr>
        <td style="text-align:justify"><span style="color:#000000">Effects</span><br>
        &nbsp;</td>
        <td style="text-align:justify"><span style="color:#000000">Master EQ: 3 types<br>
        Reverb: Off, 4 types<br>
        Chorus: Off, 4 types</span></td>
      </tr>
      <tr>
        <td style="text-align:justify"><span style="color:#000000">METRONOME</span><br>
        &nbsp;</td>
        <td style="text-align:justify"><span style="color:#000000">Tempo<br>
        <br>
        Quarter note = 30–280</span></td>
      </tr>
      <tr>
        <td style="text-align:justify"><span style="color:#000000">Beat</span><br>
        &nbsp;</td>
        <td style="text-align:justify"><span style="color:#000000">0/4, 2/4, 3/4, 4/4, 5/4, 6/4</span><br>
        &nbsp;</td>
      </tr>
      <tr>
        <td style="text-align:justify"><span style="color:#000000">Volume</span><br>
        &nbsp;</td>
        <td style="text-align:justify"><span style="color:#000000">0–10 levels</span><br>
        &nbsp;</td>
      </tr>
      <tr>
        <td style="text-align:justify"><span style="color:#000000">INTERNAL MEMORY</span><br>
        &nbsp;</td>
        <td style="text-align:justify"><span style="color:#000000">Internal Songs<br>
        <br>
        Demo song: 1 song<br>
        Tone demo: 15 songs</span></td>
      </tr>
      <tr>
        <td style="text-align:justify"><span style="color:#000000">OTHERS</span><br>
        &nbsp;</td>
        <td style="text-align:justify"><span style="color:#000000">Other Functions</span><br>
        &nbsp;</td>
      </tr>
      <tr>
        <td style="text-align:justify"><span style="color:#000000">Panel Lock</span></td>
        <td style="text-align:justify"><span style="color:#000000">MIDI Visual Control</span><br>
        &nbsp;</td>
      </tr>
      <tr>
        <td style="text-align:justify"><span style="color:#000000">Connectors</span><br>
        &nbsp;</td>
        <td style="text-align:justify"><span style="color:#000000">DC In jack<br>
        Phones jack x 2: Stereo 1/4-inch phone type<br>
        USB COMPUTER port: USB Type B<br>
        Input jack: Stereo 1/4-inch phone type<br>
        Output jack: Stereo 1/4-inch phone type</span></td>
      </tr>
      <tr>
        <td style="text-align:justify"><span style="color:#000000">RATED POWER OUTPUT</span><br>
        &nbsp;</td>
        <td style="text-align:justify"><span style="color:#000000">Rated Power Output<br>
        <br>
        10 W x 2<br>
        <br>
        Speakers<br>
        <br>
        15 cm (6 inches) x 2<br>
        <br>
        Controls<br>
        <br>
        Volume</span></td>
      </tr>
      <tr>
        <td style="text-align:justify"><span style="color:#000000">POWER SUPPLY</span><br>
        &nbsp;</td>
        <td style="text-align:justify"><span style="color:#000000">Power Supply<br>
        <br>
        AC adaptor<br>
        <br>
        Power Consumption<br>
        <br>
        20 W (5–30 W)<br>
        <br>
        Current Draw<br>
        <br>
        DC 15 V / 2,500 mA</span></td>
      </tr>
    </tbody>
  </table>',
    'hinh_anh' => 'roland-rp-30-1-400x400.gif',
  ],
  
  // 5
  [
    'ten_san_pham' => 'Samick JS121FD',
    'gia' => 96000000,
    'so_luong' => 2,
    'so_luong_da_ban' => 0,
    'mo_ta' => '<div id="tkst" class="description_singer maxheigh300"><p>Sound board&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Spruce core Soundboard &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | Soundboard lõi Gỗ Vân Sam nguyên khối</p>

    <p>Frame&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sand-casting Iron plate Frame&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |Khung Sườn Đàn đúc khuôn cát</p>
    
    <p>Bridge&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Vertical laminated maple bridge&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |Ngựa đàn gỗ thích ép dọc</p>
    
    <p>String&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Roslau (Made in Germany)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |Dây đàn số 1 của Đức</p>
    
    <p>Fallboard&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Safe slow-closing system&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |Nắp đàn đóng chậm</p>
    
    <p>Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Height: 121cm / Width: 150cm / Depth: 61cm / Weight: 221kg</p>
    </div>',
    'hinh_anh' => 'piano-samick-JS121FD-400x400.jpg',
  ],
  
  // 6
  [
    'ten_san_pham' => 'Blackstar SONNET 120 BLONDE',
    'gia' => 15420000,
    'so_luong' => 2,
    'so_luong_da_ban' => 0,
    'mo_ta' => '<ul>
    <li>120W, 1x8 + tweeter</li>
    <li>Bluetooth audio</li>
    <li>Microphone and instrument channels with independent EQ, anti-feedback and REVERB levels</li>
    <li>Stunning studio quality reverbs: HALL and PLATE</li>
    <li>High Pass Filter</li>
    <li>Brilliance</li>
    <li>Effects loop for each channel</li>
    <li>USB audio out</li>
    <li>XLR D.I. output for each channel and mix</li>
    <li>MP3/Line in</li>
    <li>Footswitch socket for audio mute and REVERB on/off</li>
    <li>Tilt-back stand</li>
    </ul>',
    'hinh_anh' => 'blackstar-sonnet-120-blonde-400x400.jpg',
  ],
  
];

foreach ($san_pham as $sp) {
  $values = array_values($sp);

  foreach ($values as $k => $v) {
    $x = "'" . htmlspecialchars($v) . "'";

    if ($k == 1 || $k == 2 || $k == 3) {
      $x = substr($x, 1);
      $x = substr($x, 0, -1);
    }
    $values[$k] = $x;
  }

  $values = implode(",", $values);

  $sql = "INSERT INTO san_pham (ten_san_pham, gia, so_luong, so_luong_da_ban, mo_ta, hinh_anh) 
    VALUES ($values)";

  mysqli_query($conn, $sql);
}
