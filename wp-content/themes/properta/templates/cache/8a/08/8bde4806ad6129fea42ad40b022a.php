<?php

/* properties/property-map.twig */
class __TwigTemplate_8a088bde4806ad6129fea42ad40b022a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if (($this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_latitude"), "method"), 0) && $this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_longitude"), "method"), 0))) {
            // line 2
            echo "    <h2>";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Map", 1 => "aviators"), "method"), "html", null, true);
            echo "</h2>

    <div id=\"property-map\"></div>

    <script type=\"text/javascript\">
        jQuery(document).ready(function (\$) {
            function LoadMapProperty() {
                var locations = new Array(
                        [";
            // line 10
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_latitude"), "method"), 0), "html", null, true);
            echo ", ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_longitude"), "method"), 0), "html", null, true);
            echo "]
                );
                var types = new Array(
                        '";
            // line 13
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_wp_, "wp_get_object_terms", array(0 => $this->getAttribute($_post_, "ID"), 1 => "property_types"), "method"), 0), "slug"), "html", null, true);
            echo "'
                );
                var markers = new Array();
                var plainMarkers = new Array();

                var mapOptions = {
                    center     : new google.maps.LatLng(";
            // line 19
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_latitude"), "method"), 0), "html", null, true);
            echo ", ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_longitude"), "method"), 0), "html", null, true);
            echo "),
                    zoom       : 14,
                    mapTypeId  : google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false
                };

                var map = new google.maps.Map(document.getElementById('property-map'), mapOptions);

                \$.each(locations, function (index, location) {
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(location[0], location[1]),
                        map     : map,
                        icon    : '";
            // line 31
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
            echo "/assets/img/marker-transparent.png'
                    });

                    var myOptions = {
                        draggable             : true,
                        content               : '<div class=\"marker ' + types[index] + '\"><div class=\"marker-inner\"></div></div>',
                        disableAutoPan        : true,
                        pixelOffset           : new google.maps.Size(-21, -58),
                        position              : new google.maps.LatLng(location[0], location[1]),
                        closeBoxURL           : \"\",
                        isHidden              : false,
                        // pane: \"mapPane\",
                        enableEventPropagation: true
                    };
                    marker.marker = new InfoBox(myOptions);
                    marker.marker.isHidden = false;
                    marker.marker.open(map, marker);
                    markers.push(marker);
                });

                google.maps.event.addListener(map, 'zoom_changed', function () {
                    \$.each(markers, function (index, marker) {
                        marker.infobox.close();
                    });
                });
            }

            google.maps.event.addDomListener(window, 'load', LoadMapProperty);

            var dragFlag = false;
            var start = 0, end = 0;

            function thisTouchStart(e) {
                dragFlag = true;
                start = e.touches[0].pageY;
            }

            function thisTouchEnd() {
                dragFlag = false;
            }

            function thisTouchMove(e) {
                if (!dragFlag) return;
                end = e.touches[0].pageY;
                window.scrollBy(0, ( start - end ));
            }

            document.getElementById(\"property-map\").addEventListener(\"touchstart\", thisTouchStart, true);
            document.getElementById(\"property-map\").addEventListener(\"touchend\", thisTouchEnd, true);
            document.getElementById(\"property-map\").addEventListener(\"touchmove\", thisTouchMove, true);
        });

    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "properties/property-map.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  36 => 10,  23 => 2,  74 => 15,  67 => 13,  49 => 11,  46 => 10,  41 => 9,  38 => 8,  26 => 4,  22 => 2,  272 => 84,  263 => 80,  256 => 77,  252 => 75,  249 => 74,  246 => 73,  236 => 70,  231 => 69,  228 => 68,  224 => 67,  221 => 66,  218 => 65,  210 => 62,  205 => 61,  202 => 60,  197 => 59,  193 => 58,  190 => 57,  187 => 56,  179 => 53,  174 => 52,  171 => 51,  166 => 50,  162 => 49,  154 => 46,  149 => 45,  145 => 43,  137 => 40,  132 => 39,  129 => 38,  125 => 37,  117 => 34,  112 => 33,  108 => 31,  103 => 28,  100 => 27,  92 => 25,  88 => 24,  80 => 31,  72 => 20,  68 => 19,  62 => 17,  59 => 19,  55 => 15,  39 => 11,  33 => 7,  24 => 4,  19 => 1,);
    }
}
