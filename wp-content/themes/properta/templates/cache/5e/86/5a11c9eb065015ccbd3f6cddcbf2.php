<?php

/* properties/property-map.twig */
class __TwigTemplate_5e865a11c9eb065015ccbd3f6cddcbf2 extends Twig_Template
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
        if (($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_latitude"), "method"), 0) && $this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_longitude"), "method"), 0))) {
            // line 2
            echo "    <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Map", 1 => "aviators"), "method"), "html", null, true);
            echo "</h2>

    <div id=\"property-map\"></div>

    <script type=\"text/javascript\">
        jQuery(document).ready(function (\$) {
            function LoadMapProperty() {
                var locations = new Array(
                        [";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_latitude"), "method"), 0), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_longitude"), "method"), 0), "html", null, true);
            echo "]
                );
                var types = new Array(
                        '";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "wp_get_object_terms", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "property_types"), "method"), 0), "slug"), "html", null, true);
            echo "'
                );
                var markers = new Array();
                var plainMarkers = new Array();

                var mapOptions = {
                    center     : new google.maps.LatLng(";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_latitude"), "method"), 0), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_longitude"), "method"), 0), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_template_directory_uri", array(), "method"), "html", null, true);
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
        return array (  66 => 15,  42 => 10,  35 => 8,  21 => 2,  218 => 85,  211 => 81,  205 => 78,  201 => 76,  199 => 75,  196 => 74,  189 => 71,  185 => 70,  182 => 69,  180 => 68,  177 => 67,  174 => 66,  168 => 63,  164 => 62,  161 => 61,  158 => 60,  156 => 59,  153 => 58,  150 => 57,  144 => 54,  137 => 52,  134 => 51,  132 => 50,  122 => 46,  118 => 44,  112 => 41,  108 => 40,  105 => 39,  103 => 38,  97 => 35,  84 => 29,  81 => 28,  73 => 25,  59 => 13,  54 => 18,  51 => 17,  49 => 16,  38 => 9,  33 => 10,  25 => 4,  45 => 11,  27 => 4,  24 => 3,  22 => 2,  19 => 1,  93 => 34,  85 => 28,  72 => 21,  69 => 20,  67 => 31,  64 => 18,  61 => 21,  53 => 16,  44 => 12,  41 => 13,  39 => 10,  36 => 6,  34 => 8,  29 => 5,  26 => 4,  20 => 1,  142 => 48,  140 => 53,  135 => 44,  133 => 43,  126 => 47,  121 => 37,  116 => 34,  114 => 33,  107 => 28,  89 => 32,  86 => 23,  82 => 27,  78 => 19,  75 => 26,  58 => 17,  50 => 19,  40 => 5,  31 => 7,  28 => 3,);
    }
}
